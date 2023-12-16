<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kitchens
 */

get_header();
?>

<section class="main-screen flex all-center">
	<div class="content">
		<p class="section-subtitle"><?php the_field('main_subtitle'); ?></p>
		<h1 class="headline"><?php the_field('headline'); ?></h1>
        <a href="/signup" class="btn color">order now</a>
	</div>
	<div class="main-slider owl-carousel">
		<div class="item">
			<img src="<?php bloginfo('template_url'); ?>/assets/images/mainscreen-img.png" loading='lazy' alt="Kitchen">
		</div>
		<div class="item">
			<img src="<?php bloginfo('template_url'); ?>/assets/images/mainscreen-img_2.png" loading='lazy' alt="Kitchen">
		</div>
		<div class="item">
			<img src="<?php bloginfo('template_url'); ?>/assets/images/mainscreen-img_3.png" loading='lazy' alt="Kitchen">
		</div>
	</div>
</section>

<section class="about-section flex a-center">
	<img src="<?php bloginfo('template_url'); ?>/assets/images/about-section.png" loading='lazy' alt="Kitchen">
	<div class="content">
		<p class="section-subtitle"><?php the_field('about_subtitle'); ?></p>
		<h2 class="title"><?php the_field('about_title'); ?></h2>
		<p class="text"><?php the_field('about_text'); ?></p>
        <a href="/about" class="btn color">about us</a>
	</div>
</section>


<section class="reviews flex a-center column space-b">
	<div class="content flex a-center column">
		<p class="section-subtitle"><?php the_field('reviews_subtitle'); ?></p>
		<h3 class="title"><?php the_field('reviews_title'); ?></h3>
		<div class="reviews-slider owl-carousel">
			<div class="item">
				<p class="text"><?php the_field('review_1'); ?></p>
				<span><?php the_field('review_1_name'); ?></span>
			</div>
			<div class="item">
				<p class="text"><?php the_field('review_2'); ?></p>
				<span><?php the_field('review_2_name'); ?></span>
			</div>
			<div class="item">
				<p class="text"><?php the_field('review_3'); ?></p>
				<span><?php the_field('review_3_name'); ?></span>
			</div>
			<div class="item">
				<p class="text"><?php the_field('review_4'); ?></p>
				<span><?php the_field('review_4_name'); ?></span>
			</div>
		</div>
		<div id="reviewsNav"></div>
	</div>
    <a href="/faq" class="btn color">Frequently Asked Questions</a>
</section>

<section class="gallery flex a-center column">
	<h3 class="title">Customer Gallery</h3>
	<div class="container flex all-center gap">
		<img src="<?php bloginfo('template_url'); ?>/assets/images/gallery-img-1.png" loading='lazy' alt="Kitchen gallery photo" width="310" height="310">
		<img src="<?php bloginfo('template_url'); ?>/assets/images/gallery-img-2.png" loading='lazy' alt="Kitchen gallery photo" width="310" height="310">
		<img src="<?php bloginfo('template_url'); ?>/assets/images/gallery-img-3.png" loading='lazy' alt="Kitchen gallery photo" width="310" height="310">
		<img src="<?php bloginfo('template_url'); ?>/assets/images/gallery-img-4.png" loading='lazy' alt="Kitchen gallery photo" width="310" height="310">
	</div>
    <a href="/gallery" class="btn color">View More</a>
</section>

<?php
get_footer();
