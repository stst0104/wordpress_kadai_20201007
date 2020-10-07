
<?php get_header(); ?>
<div id="contents">

<section>

<h2>Pickup News<span>注目ニュース</span></h2>

<?php 
$args = array(
  'post_type' => 'post',
  'category_name' => 'news',
	'posts_per_page' => 2,
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ): ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<div class="list">
<figure><img src="<?php echo get_template_directory_uri(); ?>/images/sample1.jpg" alt=""></figure>
<div class="text">
<?php the_category(); ?>
<h4><?php the_title(); ?></h4>
<p><?php the_excerpt(); ?></p>
<p class="btn1"><a href="<?php the_permalink(); ?>service2.html">もっとみる</a></p>
</div>
</div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>


</section>



<section id="new">
<h2>更新情報・お知らせ</h2>
<dl>
<?php
   $newslist = get_posts( array(
    'category_name' => 'news', //特定のカテゴリースラッグを指定
		'posts_per_page' => 10 //取得記事件数
  ));
    foreach( $newslist as $post ):
    setup_postdata( $post );
?>
<dt> <?php the_time('X年n月j日'); ?></dt>
<dd> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a> 
<?php 
$days = 7;
$today = date_i18n('U');
$entry_day = get_the_time('U');
$keika = date('U',($today - $entry_day)) / 86400;
if ( $days > $keika ):
		echo '<span class="newicon">NEW</span>';
    // echo 'new';
endif;    
?>
</dd>
<?php
  endforeach;
  wp_reset_postdata();
?>
</dl>
</section>





<section>

<h2>テンプレートのご利用前に必ずお読み下さい</h2>

<?php
  $arg = array(
             'category_name' => 'info', // 表示したいカテゴリーのスラッグを指定
             
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