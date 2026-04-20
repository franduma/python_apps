<?php
/**
 * WooCommerce shop sidebar.
 *
 * @package EnergiesRenouvelablesPro
 */

if (! defined('ABSPATH')) {
    exit;
}
?>
<aside class="erp-shop-sidebar" aria-label="<?php esc_attr_e('Filtres produits', 'erp-theme'); ?>">
    <?php if (is_active_sidebar('erp-shop-sidebar')) : ?>
        <?php dynamic_sidebar('erp-shop-sidebar'); ?>
    <?php else : ?>
        <?php echo wp_kses_post(do_shortcode('[fe_widget id="587"]')); ?>
    <?php endif; ?>
</aside>
