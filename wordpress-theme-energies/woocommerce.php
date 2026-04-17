<?php
/**
 * WooCommerce fallback template.
 *
 * @package EnergiesRenouvelablesPro
 */

get_header();
?>
<main class="section">
    <div class="container woocommerce-container">
        <?php woocommerce_content(); ?>
    </div>
</main>
<?php
get_footer();
