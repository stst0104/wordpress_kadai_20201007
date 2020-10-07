<?php get_header(); ?>

<?php if ( have_posts() ) : the_post(); ?>

	<main class="main main-lp">
		<div class="container">
			<section class="lp">
				<header class="lp_header">
					<h2 class="lp_title">3周年スペシャルデー</h2>
					<div class="lp_header_desc">
						<p>
							おかげさまで3周年。<br>
							特別なメニューをご用意しております。
						</p>
					</div>
				</header>

				<div class="lp_body">
					<div class="row">
						<div class="col-md-6">
							<div class="lp_pic lp_pic-sm"
								style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/special/pic-2.jpg')"></div>
							<div class="lp_pic lp_pic-sm"
								style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/special/pic-2.jpg')"></div>
						</div>
						<div class="col-md-6">
							<div class="lp_pic lp_pic-lg"
								style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/special/pic-3.jpg')"></div>
						</div>
					</div>
				</div>

				<div class="lp_footer">
					<h3 class="title">お問い合わせ<span>CONTACT</span></h3>
					<div class="contact">
						<div class="contact_icon">
							<i class="fas fa-phone"></i>
						</div>
						<div class="contact_body">
							<p>
								お気軽にお問い合わせください
								<span>03-1234-5678</span>
							</p>
						</div>
					</div>
				</div>
			</section>
		</div>
	</main>
	
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>

	<div class="pagetop js-pagetop"><i class="fas fa-angle-up"></i>PAGE TOP</div>

	<footer class="footer">
		<div class="container">
			<div class="footer_inner">
				<nav>
					<ul>
						<li><a href="#">HOME</a></li>
						<li><a href="#">わたしたちについて</a></li>
						<li><a href="#">アクセス</a></li>
						<li><a href="#">最新情報</a></li>
						<li><a href="#">お問い合わせ</a></li>
					</ul>
				</nav>
				<div class="footer_copyright">
					<small>&copy; BISTRO CALME All rights reserved.</small>
				</div>
			</div>
		</div>
	</footer>

</body>

</html>