<?php
/**
 * WooCommerce product archive template with left sidebar.
 *
 * @package EnergiesRenouvelablesPro
 */

if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main class="section">
    <div class="container erp-shop-layout">
        <aside class="erp-shop-sidebar" aria-label="<?php esc_attr_e('Filtres produits', 'erp-theme'); ?>">
            <?php if (is_active_sidebar('erp-shop-sidebar')) : ?>
                <?php dynamic_sidebar('erp-shop-sidebar'); ?>
            <?php else : ?>
                <?php echo do_shortcode('[fe_widget id="587"]'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
            <?php endif; ?>
        </aside>

        <section class="erp-shop-main">
            <?php woocommerce_content(); ?>
        </section>
    </div>
</main>
<?php
get_footer();
