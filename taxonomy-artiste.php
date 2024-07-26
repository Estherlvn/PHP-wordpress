<?php get_header(); ?>

<?php $term = get_queried_object(); ?>

<header>
    <h1><?php single_term_title(); ?></h1>
    <?php
    $illustration = get_field('illustration', $term);
    if ($illustration) {
        echo '<img src="' . esc_url($illustration) . '" alt="' . esc_attr(single_term_title('', false)) . '">';
    }
    ?>
</header>

<?php if (have_posts()) : ?>
    <section>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <a href="<?php the_permalink(); ?>">
                    <h2><?php the_title(); ?></h2>
                    <div class="setlist">
                        <?php the_field('setlist'); ?>
                    </div>
                </a>
            </article>
        <?php endwhile; ?>
    </section>
<?php else : ?>
    <p>Aucun article trouvé pour ce terme.</p>
<?php endif; ?>

<?php get_footer(); ?>
