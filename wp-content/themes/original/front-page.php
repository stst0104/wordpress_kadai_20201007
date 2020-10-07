<?php if ( have_posts() ): ?>
    <?php while ( have_posts()): ?>
        <?php the_posts(); ?>

        <h1><a href="<?php the_parmalink(); ?>"><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>

    <?php endwhile; ?>
<?php endif; ?>

<?php wp_iist_categories(); ?>
