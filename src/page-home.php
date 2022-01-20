<?php /**
* Template Name: Home-Page
*
* @package WordPress
* @subpackage intersektionalitaet-etc.de
* @since 1.0
*/
?>

<?php
if(get_theme_mod('work_in_progress') && !is_user_logged_in()) {
	require(get_theme_file_path('/workinprogress.php'));
	die();
}
?>

<?php get_header(); ?>

<!-- header -->
<header class="header clear" role="banner">

		<!-- logo -->
		<div class="logo-home">
			<a href="<?php echo home_url(); ?>">
				<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
				<img src="<?php echo get_template_directory_uri(); ?>/img/Logo.svg" alt="Das 'et cetera' der Intersektionalität" class="logo-img">
			</a>
		</div>
		<!-- /logo -->


</header>
<!-- /header -->

	<main role="main" class="home-page">
		<!-- section -->
		<section>


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<section class="category-menu">
			<?php
			wp_nav_menu(array('theme_location' => 'category-menu'));
			?>
		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
