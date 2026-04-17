<?php
/**
 * Product card partial.
 *
 * @package EnergiesRenouvelablesPro
 */

$type = get_post_meta(get_the_ID(), '_erp_product_type', true);
$price = get_post_meta(get_the_ID(), '_erp_price', true);
?>
<article class="card">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <?php if (! empty($type)) : ?>
        <p><small><?php echo esc_html((string) $type); ?></small></p>
    <?php endif; ?>
    <?php if (! empty($price)) : ?>
        <p class="price"><?php echo esc_html((string) $price); ?></p>
    <?php endif; ?>
    <?php the_excerpt(); ?>
</article>
