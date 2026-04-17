<?php
/**
 * Header template.
 *
 * @package EnergiesRenouvelablesPro
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="erp-site-header">
    <div class="erp-container erp-header-inner">
        <div class="erp-brand-wrap">
            <?php if (has_custom_logo()) : ?>
                <div class="erp-site-logo"><?php the_custom_logo(); ?></div>
            <?php endif; ?>
            <p class="erp-site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></p>
        </div>

        <nav aria-label="<?php esc_attr_e('Menu principal', 'erp-theme'); ?>">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'fallback_cb'    => false,
                'menu_class'     => 'erp-menu',
            ]);
            ?>
        </nav>

        <a class="erp-btn erp-btn-outline" href="#devis"><?php esc_html_e('Demander un devis', 'erp-theme'); ?></a>
    </div>
</header>
