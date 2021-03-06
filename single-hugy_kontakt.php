<?php
/**
 * The template for displaying program page.
 *
 * @package 	WordPress
 * @subpackage 	HuGy (Starkers)
 * @since 		HuGy 1.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="content-wrapper">
	<?php echo HuGy::get_contact(get_the_ID(),array('imagesize' => 'thumbnail', 'excerpt' => false)); ?>

	<?php echo HuGy::get_modules(get_the_ID()); ?>

</div>
<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>