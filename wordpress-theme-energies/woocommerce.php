<?php
/**
 * WooCommerce fallback template.
 *
 * @package EnergiesRenouvelablesPro
 */

get_header();
?>
<main class="erp-section">
    <div class="erp-container erp-woocommerce-container">
        <?php woocommerce_content(); ?>
    </div>
</main>
<?php
get_footer();
