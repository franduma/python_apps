<?php
/**
 * Front page template.
 *
 * @package EnergiesRenouvelablesPro
 */

get_header();
?>
<section class="erp-hero">
    <div class="erp-container erp-hero-grid">
        <div>
            <p class="erp-badge"><?php esc_html_e('Installateur & boutique photovoltaïque', 'erp-theme'); ?></p>
            <h1><?php esc_html_e('Une interface premium pour vendre vos solutions solaires', 'erp-theme'); ?></h1>
            <p><?php esc_html_e('Mettez en valeur vos panneaux, onduleurs, batteries et régulateurs MPPT avec un design professionnel orienté confiance et conversion.', 'erp-theme'); ?></p>
            <div class="erp-hero-actions">
                <a class="erp-btn" href="#produits"><?php esc_html_e('Voir la boutique', 'erp-theme'); ?></a>
                <a class="erp-btn erp-btn-outline" href="#devis"><?php esc_html_e('Configurer mon besoin', 'erp-theme'); ?></a>
            </div>
        </div>

        <aside class="erp-hero-panel erp-card">
            <h3><?php esc_html_e('Pourquoi ce thème ?', 'erp-theme'); ?></h3>
            <ul class="erp-check-list">
                <li><?php esc_html_e('Design moderne compatible WooCommerce', 'erp-theme'); ?></li>
                <li><?php esc_html_e('Section devis déjà connectée à votre shortcode', 'erp-theme'); ?></li>
                <li><?php esc_html_e('Parcours clair pour générer des demandes qualifiées', 'erp-theme'); ?></li>
            </ul>
        </aside>
    </div>
</section>

<section class="erp-section erp-section-soft">
    <div class="erp-container">
        <h2><?php esc_html_e('Vos univers produits', 'erp-theme'); ?></h2>
        <div class="erp-grid">
            <article class="erp-card"><h3><?php esc_html_e('Panneaux solaires', 'erp-theme'); ?></h3><p><?php esc_html_e('Monocristallins, bifaciaux, kits toiture et sol.', 'erp-theme'); ?></p></article>
            <article class="erp-card"><h3><?php esc_html_e('Onduleurs', 'erp-theme'); ?></h3><p><?php esc_html_e('String, hybrides, micro-onduleurs et monitoring.', 'erp-theme'); ?></p></article>
            <article class="erp-card"><h3><?php esc_html_e('Batteries', 'erp-theme'); ?></h3><p><?php esc_html_e('Stockage résidentiel et tertiaire longue durée.', 'erp-theme'); ?></p></article>
            <article class="erp-card"><h3><?php esc_html_e('Régulateurs MPPT', 'erp-theme'); ?></h3><p><?php esc_html_e('Pilotage intelligent pour un rendement maximal.', 'erp-theme'); ?></p></article>
        </div>
    </div>
</section>

<section id="produits" class="erp-section">
    <div class="erp-container">
        <h2><?php esc_html_e('Produits en vedette', 'erp-theme'); ?></h2>
        <?php if (class_exists('WooCommerce')) : ?>
            <div class="erp-woocommerce-shortcode-wrap">
                <?php echo do_shortcode('[products limit="8" columns="4" orderby="date" order="DESC"]'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
            </div>
        <?php else : ?>
            <div class="erp-grid">
                <?php
                $query = new WP_Query([
                    'post_type'      => 'erp_product',
                    'posts_per_page' => 8,
                ]);

                if ($query->have_posts()) :
                    while ($query->have_posts()) :
                        $query->the_post();
                        get_template_part('template-parts/content', 'product');
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <p><?php esc_html_e('Ajoutez vos premiers produits solaires depuis l’administration WordPress.', 'erp-theme'); ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<section id="devis" class="erp-section erp-section-soft">
    <div class="erp-container">
        <h2><?php esc_html_e('Configurez votre projet en ligne', 'erp-theme'); ?></h2>
        <p><?php esc_html_e('Votre configurateur de besoin est intégré ci-dessous pour accélérer la demande de devis.', 'erp-theme'); ?></p>
        <div class="erp-card erp-quote-card">
            <?php echo erp_render_quote_shortcode(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
        </div>
    </div>
</section>
<?php
get_footer();
