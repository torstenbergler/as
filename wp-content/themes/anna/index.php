<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package annasourminskaja
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<h1><a href="<?php echo get_category_link('1'); ?>"><?php echo bloginfo(name); ?></a></h1>
		<h2><?php echo bloginfo(description) ?></h2>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
