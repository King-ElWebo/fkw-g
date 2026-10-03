/**
 * FKW-G - Hauptskript (Vanilla JavaScript, keine Build-Schritte, keine Abhängigkeiten)
 * Friedrich-Karl-Weniger Gesellschaft
 */

document.addEventListener('DOMContentLoaded', function () {
  // --- 1. Barrierefreie Kopierfunktion für E-Mail & IBAN mit visueller Rückmeldung ---
  var copyButtons = document.querySelectorAll('.js-copy-email, .btn-copy, .js-copy-iban');
  copyButtons.forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      var textToCopy = btn.getAttribute('data-copy') || btn.getAttribute('data-email') || 'team@fkw-g.at';
      var container = btn.closest('.d-flex') || btn.parentElement;
      var feedbackSpan = container ? container.querySelector('.copy-feedback, .iban-feedback') : null;
      if (!feedbackSpan && btn.parentElement) {
        feedbackSpan = btn.parentElement.querySelector('.copy-feedback, .iban-feedback');
      }

      function showFeedback() {
        if (feedbackSpan) {
          feedbackSpan.classList.add('active');
          feedbackSpan.setAttribute('role', 'status');
          setTimeout(function () {
            feedbackSpan.classList.remove('active');
          }, 3500);
        } else {
          var originalText = btn.innerText;
          btn.innerText = 'Kopiert!';
          btn.setAttribute('disabled', 'disabled');
          setTimeout(function () {
            btn.innerText = originalText;
            btn.removeAttribute('disabled');
          }, 2500);
        }
      }

      if (navigator.clipboard && window.isSecureContext) {
        navigator.clipboard.writeText(textToCopy).then(showFeedback).catch(function () {
          fallbackCopyText(textToCopy, showFeedback);
        });
      } else {
        fallbackCopyText(textToCopy, showFeedback);
      }
    });
  });

  function fallbackCopyText(text, callback) {
    var textArea = document.createElement('textarea');
    textArea.value = text;
    textArea.style.position = 'fixed';
    textArea.style.left = '-999999px';
    textArea.style.top = '-999999px';
    document.body.appendChild(textArea);
    textArea.focus();
    textArea.select();
    try {
      document.execCommand('copy');
      if (typeof callback === 'function') callback();
    } catch (err) {
      prompt('In die Zwischenablage kopieren mit Strg+C / Cmd+C:', text);
    }
    document.body.removeChild(textArea);
  }

  // --- 2. Barrierefreie Mobilnavigation (Drawer & Backdrop) ---
  var navToggler = document.querySelector('.navbar-toggler');
  var navCollapse = document.getElementById('navbarNav');

  if (navToggler && navCollapse) {
    var backdrop = document.querySelector('.navbar-backdrop');
    if (!backdrop) {
      backdrop = document.createElement('div');
      backdrop.className = 'navbar-backdrop';
      document.body.appendChild(backdrop);
    }

    function openMobileMenu() {
      navCollapse.classList.add('show');
      backdrop.classList.add('active');
      navToggler.setAttribute('aria-expanded', 'true');
      document.body.style.overflow = 'hidden';

      var closeBtn = navCollapse.querySelector('.nav-close-btn');
      if (closeBtn) closeBtn.focus();
    }

    function closeMobileMenu() {
      navCollapse.classList.remove('show');
      backdrop.classList.remove('active');
      navToggler.setAttribute('aria-expanded', 'false');
      document.body.style.overflow = '';
      navToggler.focus();
    }

    navToggler.addEventListener('click', function (e) {
      e.preventDefault();
      var isOpen = navCollapse.classList.contains('show');
      if (isOpen) {
        closeMobileMenu();
      } else {
        openMobileMenu();
      }
    });

    backdrop.addEventListener('click', closeMobileMenu);

    var closeBtn = navCollapse.querySelector('.nav-close-btn');
    if (closeBtn) {
      closeBtn.addEventListener('click', closeMobileMenu);
    }

    // Escape-Taste schließt Menü
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && navCollapse.classList.contains('show')) {
        closeMobileMenu();
      }
    });

    // Barrierefreie Fokusfalle (Focus Trap) im geöffneten Drawer
    navCollapse.addEventListener('keydown', function (e) {
      if (e.key !== 'Tab' || !navCollapse.classList.contains('show')) return;
      var focusables = navCollapse.querySelectorAll('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])');
      if (focusables.length === 0) return;
      var firstElem = focusables[0];
      var lastElem = focusables[focusables.length - 1];

      if (e.shiftKey) {
        if (document.activeElement === firstElem) {
          lastElem.focus();
          e.preventDefault();
        }
      } else {
        if (document.activeElement === lastElem) {
          firstElem.focus();
          e.preventDefault();
        }
      }
    });

    // Menü bei Klick auf Links oder bei Bildschirmvergrößerung schließen
    var navLinks = navCollapse.querySelectorAll('.nav-link, .btn');
    navLinks.forEach(function (link) {
      link.addEventListener('click', function () {
        if (window.innerWidth < 1200) {
          closeMobileMenu();
        }
      });
    });

    window.addEventListener('resize', function () {
      if (window.innerWidth >= 1200 && navCollapse.classList.contains('show')) {
        closeMobileMenu();
      }
    });
  }

  // --- 3. Sofortfilter & Aufwertung für Dokumentenbibliothek ---
  var acfWrap = document.querySelector('.fkw-acf-downloads-wrap');
  if (acfWrap) {
    // Verschönere Links mit Dateityp-Badges, falls nicht vorhanden
    var links = acfWrap.querySelectorAll('a');
    links.forEach(function (a) {
      var href = (a.getAttribute('href') || '').toLowerCase();
      if (!a.querySelector('.doc-badge-pdf') && !a.querySelector('.doc-badge-docx')) {
        var badge = document.createElement('span');
        if (href.indexOf('.pdf') !== -1) {
          badge.className = 'doc-badge-pdf me-2';
          badge.textContent = 'PDF';
          a.prepend(badge);
        } else if (href.indexOf('.docx') !== -1 || href.indexOf('.doc') !== -1) {
          badge.className = 'doc-badge-docx me-2';
          badge.textContent = 'DOCX';
          a.prepend(badge);
        }
      }
    });
  }

  var docSearchInput = document.getElementById('docSearchInput');
  if (docSearchInput) {
    var getDocItems = function () {
      return document.querySelectorAll('.js-doc-item, .fkw-acf-downloads-wrap ul li, .fkw-acf-downloads-wrap p:has(a)');
    };

    docSearchInput.addEventListener('input', function () {
      var query = this.value.toLowerCase().trim();
      var items = getDocItems();
      items.forEach(function (item) {
        var text = item.textContent.toLowerCase();
        if (query === '' || text.indexOf(query) !== -1) {
          item.style.display = '';
        } else {
          item.style.display = 'none';
        }
      });
    });
  }
});
