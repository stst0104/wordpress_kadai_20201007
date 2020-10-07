<?php get_header(); ?>

<div id="contents">

<section>

<h2>Service<span>サービス</span></h2>

<?php 
$args = array(
	'post_type' => 'post',
	'posts_per_page' => -1,
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ): ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<div class="list">
	<figure><img src="<?php echo get_template_directory_uri(); ?>/images/sample1.jpg" alt=""></figure>
	<div class="text">
<?php the_category(); ?>
<h4><?php the_title(); ?></h4>
<p>ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。</p>
<p class="btn1"><a href="<?php the_permalink(); ?>service2.html">もっとみる</a></p>
</div>
</div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>

</section>

</div>
<!--/#contents-->


<?php get_footer(); ?>