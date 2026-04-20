<?php
/**
 * Product archive template.
 *
 * @package EnergiesRenouvelablesPro
 */

get_header();
?>
<main class="erp-section">
    <div class="erp-container">
        <h1><?php post_type_archive_title(); ?></h1>
        <div class="erp-grid">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/content', 'product'); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php esc_html_e('Aucun produit disponible pour le moment.', 'erp-theme'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</main>
<?php
get_footer();
