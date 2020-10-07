<?php get_header(); ?>
<div id="contents">

<section>

<h2>当テンプレートについて</h2>

<?php
  $arg = array(
             'category_name' => 'info2', // 表示したいカテゴリーのスラッグを指定
             
         );
  $posts = get_posts( $arg );

  if( $posts ): ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <section class="post-item">
      <h3><?php the_title(); ?></h3>
      <p><?php the_content(); ?></p>
    </section>
  <?php endwhile; ?>
<?php
  endif;
  wp_reset_postdata();
?>

</section>


</div>
<!--/#contents-->

<?php get_footer(); ?>