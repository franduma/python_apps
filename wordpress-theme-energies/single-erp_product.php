<?php
/**
 * Single product template.
 *
 * @package EnergiesRenouvelablesPro
 */

get_header();
?>
<main class="erp-section">
    <div class="erp-container">
        <?php while (have_posts()) : the_post(); ?>
            <article class="erp-card">
                <h1><?php the_title(); ?></h1>
                <?php
                $type = get_post_meta(get_the_ID(), '_erp_product_type', true);
                $price = get_post_meta(get_the_ID(), '_erp_price', true);
                ?>
                <p><strong><?php esc_html_e('Type :', 'erp-theme'); ?></strong> <?php echo esc_html((string) $type); ?></p>
                <?php if (! empty($price)) : ?>
                    <p class="erp-price"><?php echo esc_html((string) $price); ?></p>
                <?php endif; ?>
                <div><?php the_content(); ?></div>
            </article>
        <?php endwhile; ?>
    </div>
</main>
<?php
get_footer();
