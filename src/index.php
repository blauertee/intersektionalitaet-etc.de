<?php
if(get_theme_mod('work_in_progress') && !is_user_logged_in()) {
	require(get_theme_file_path('/workinprogress.php'));
	die();
}
?>

<h2>Pleas go <a href="<?php echo get_home_url()  ?>">home</a></h2>

<?php /*get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
*/
?>
