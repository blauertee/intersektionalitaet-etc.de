<?php
if(get_theme_mod('work_in_progress') && !is_user_logged_in()) {
	require(get_theme_file_path('/workinprogress.php'));
	die();
}
?>

<?php get_header(); ?>

	<main role="main">
		<section class="category-menu">
			<?php
			wp_nav_menu(array('theme_location' => 'category-menu'));
			?>
		</section>
		<!-- section -->
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php /*get_sidebar(); */?>

<?php get_footer(); ?>
