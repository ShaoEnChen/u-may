<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="main-content" id="products-showcase">
			<div class="content-container" id="jelly-drinks">
				<img src="wp-content/themes/custom/assets/images/frontpage-main/product-jelly-drinks.jpg" alt="">
			</div>
			<div class="content-container" id="jelly">
				<img src="wp-content/themes/custom/assets/images/frontpage-main/product-jelly.jpg" alt="">
			</div>
		</div>
		<div class="main-content" id="endorsers">
			<div class="content-container">
				<img src="wp-content/themes/custom/assets/images/frontpage-main/endorsers.jpg" alt="">
			</div>
		</div>
		<div class="main-content" id="main-brand-introduction">
			<a href="">
				<div class="content-container">
					<img src="wp-content/themes/custom/assets/images/frontpage-main/product-introduction.jpg" alt="">
				</div>
			</a>
		</div>
		<div class="main-content" id="main-faq">
			<a href="">
				<div class="content-container">
					<img src="wp-content/themes/custom/assets/images/frontpage-main/faq.jpg" alt="">
				</div>
			</a>
		</div>
		<div class="main-content" id="main-order-query">
			<a href="">
				<div class="content-container">
					<img src="wp-content/themes/custom/assets/images/frontpage-main/order-query.jpg" alt="">
				</div>
			</a>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
