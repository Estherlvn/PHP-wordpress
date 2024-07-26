<?php get_header(); ?>

<header class="parallax" style="background-image: url('<?php echo esc_url(get_field('home__header_wallpaper')); ?>')">
    <div class="header-content">
        <h1><?php the_field('home__header_title'); ?></h1>
        <p><?php the_field('home__header_subtittle'); ?></p>
        <a href="#" class="reservation-button">Réservation</a>
    </div>
</header>

<section>
<h2>Nos évènements</h2>
    <?php if (have_rows('home__header_events')) : ?>
        <div class="events">
            <?php while (have_rows('home__header_events')) : the_row(); ?>
                <div class="event-item">
                    <h3><?php the_sub_field('name'); ?></h3>
                    <?php $image = get_sub_field('picture'); ?>
                    <?php if ($image) : ?>
                        <?php
                        $image_id = $image['ID'];
                        $image_url = wp_get_attachment_image_url($image_id, 'full');
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        ?>
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p>Aucun événement à venir trouvé.</p>
    <?php endif; ?>
</section>

<section>
    <h2>Dernières prestations</h2>
    <div class="articles-wrapper">
    <?php
    $args_posts = array(
        'post_type' => 'post',
        'posts_per_page' => 4,
        'orderby' => 'date',
        'order' => 'DESC'
    );

    $query_posts = new WP_Query($args_posts);

    if ($query_posts->have_posts()) :
        while ($query_posts->have_posts()) : $query_posts->the_post();
            ?>
            <article>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_excerpt(); ?></p>
            </article>
            <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>Aucun article trouvé.</p>';
    endif;
    ?>
    </div>
</section>


<section>
    <h2>Formations</h2>
    <div class="formations-wrapper">
        <?php
        $terms = get_terms(array(
            'taxonomy' => 'artiste',
            'hide_empty' => false,
        ));

        if (!empty($terms) && !is_wp_error($terms)) :
            foreach ($terms as $term) :
                $term_link = get_term_link($term);
                ?>
                <div class="term">
                    <h3><a href="<?php echo esc_url($term_link); ?>"><?php echo esc_html($term->name); ?></a></h3>
                    <?php
                    if  (get_field('illustration', $term)) {
                        echo '<img src="' . get_field('illustration', $term) . '" alt="' . esc_attr($term->name) . '">';
                    }
                    ?>
                </div>
                <?php
            endforeach;
        else :
            echo '<p>Aucune catégorie d\'artiste trouvée.</p>';
        endif;
        ?>
    </div>
</section>

<section>
    <h2>Styles musicaux</h2>
    <div class="styles">
    <?php
    $args_music_style = array(
        'post_type' => 'music-style',
        'posts_per_page' => 4,
        'orderby' => 'date',
        'order' => 'DESC'
    );

    $query_music_style = new WP_Query($args_music_style);

    if ($query_music_style->have_posts()) :
        while ($query_music_style->have_posts()) : $query_music_style->the_post();
            ?>
            <article>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_excerpt(); ?></p>
            </article>
            <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>Aucun style musical trouvé.</p>';
    endif;
    ?>
</section>


<?php get_footer(); ?>
