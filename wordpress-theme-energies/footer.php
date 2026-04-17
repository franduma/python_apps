<?php
/**
 * Footer template.
 *
 * @package EnergiesRenouvelablesPro
 */
?>
<footer class="site-footer">
    <div class="container">
        <p>&copy; <?php echo esc_html((string) gmdate('Y')); ?> <?php bloginfo('name'); ?> — <?php esc_html_e('Solutions photovoltaïques professionnelles.', 'erp-theme'); ?></p>
        <?php
        wp_nav_menu([
            'theme_location' => 'footer',
            'container'      => false,
            'fallback_cb'    => false,
            'menu_class'     => 'menu',
        ]);
        ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
