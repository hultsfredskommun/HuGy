<?php
/**
 * Search results page
 * 
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); 
wp_reset_query();
?>

<div class='page-wrapper'><article class='page'>
<?php if ( have_posts() ): ?>
<h1>Visar resultat f&ouml;r '<?php echo get_search_query(); ?>'</h1>	
<ol>
<?php while ( have_posts() ) : the_post(); ?>
	<li>
		<article>
			<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<time class='time' datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate>DATUM: <?php echo get_the_date(); ?> <?php the_time(); ?></time>
			<?php echo HuGy::get_author(); ?>
			<?php the_excerpt(); ?>
		</article>
	</li>
<?php endwhile; ?>
</ol>
<div class="navigation"><p><?php posts_nav_link('&#8734;','Go 
Forward In Time','Go Back in Time'); ?></p></div>
<?php else: ?>
<h1>Inga resultat hittades f&ouml;r '<?php echo get_search_query(); ?>'</h1>
<?php endif; ?>
</article></div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>