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
        <?php get_sidebar('shop'); ?>

        <section class="erp-shop-main">
            <?php if (function_exists('woocommerce_content')) : ?>
                <?php woocommerce_content(); ?>
            <?php else : ?>
                <p><?php esc_html_e('WooCommerce doit être activé pour afficher la boutique.', 'erp-theme'); ?></p>
            <?php endif; ?>
        </section>
    </div>
</main>
<?php
get_footer();
