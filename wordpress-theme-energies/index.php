<?php
/**
 * Fallback template.
 *
 * @package EnergiesRenouvelablesPro
 */

get_header();
?>
<main class="section">
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="card" style="margin-bottom:1rem;">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php esc_html_e('Aucun contenu trouvé.', 'erp-theme'); ?></p>
        <?php endif; ?>
    </div>
</main>
<?php
get_footer();
