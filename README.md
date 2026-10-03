        <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <?php if (!empty($logo_bild) && isset($logo_bild['url'])) : ?>
                <img src="<?php echo esc_url($logo_bild['url']); ?>" alt="Logo" height="60">
            <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/LOGO_Verein_Weniger_Reinzeichnung_Pfade.png" alt="Standard-Logo" height="60">
            <?php endif; ?>
        </a>
        
<h1 class="display-3"><?php echo nl2br(esc_html(get_field('hero_uberschrift', $page_id))); ?></h1>