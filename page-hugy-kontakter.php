<?php
/**
 * The template for displaying program page.
 * Template Name: HuGy Kontaktsida
 *
 * @package 	WordPress
 * @subpackage 	HuGy (Starkers)
 * @since 		HuGy 1.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="slideshow-wrapper">
	<?php /* slideshow */ ?>
	<?php echo HuGy::get_slideshow(get_field('hg_slideshow',get_the_ID()),'program slideshow','slideshow'); ?>
</div>
<div class="content-wrapper">
	<div class="content">
		<h1><?php the_title(); ?></h1>
		<?php echo HuGy::get_author(); ?>
		<?php the_content(); ?>
		<div class='filter toggle'></div>
		<div class='filter tool'></div>
		<?php echo HuGy::get_contacts(get_the_ID(), array('title' => '', 'class' => 'contactlist')); ?>
	</div>
	<div class="block-wrapper">
	<?php echo HuGy::get_related(get_the_ID()); ?>
	</div>
	<?php echo HuGy::get_modules(get_the_ID()); ?>

</div>
<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>