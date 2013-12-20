<header class="header-wrapper">
	<div class="top-wrapper">
		<div class="top">
			<div class="top-links-wrapper">
				<?php echo HuGy::get_quicklinks(); ?>
				<?php echo HuGy::get_todaysdate_text(); ?>
			</div><div class="logo-space">
				<a href="<?php echo home_url(); ?>"><img class="logo" title="Hultsfreds gymnasium" src="<?php echo get_template_directory_uri() . "/images/hultsfreds-gymnasium.png"; ?>" alt='Hultsfreds gymnasium' /></a>
				<h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
		</div>
		
	</div>
	
	<div class="top-navigation-wrapper">
		<div class="top-navigation">
				<div class="top-menu-button">
					<a href="#menu" title="&Ouml;ppna meny"><span class='menu-icon'></span><span class='text'>Meny</span></a>
				</div>
				<div class="breadcrumb"><?php echo HuGy::get_breadcrumb(); ?></div>
				<div class="top-search-form">
					<?php echo get_search_form(); ?>
				</div>
				<div class="top-search-button">
					<a href="#search" title="S&ouml;k efter inneh&aring;ll p&aring; sidan"><span class='search-icon'></span></a>
				</div>
		</div>
	</div>
</header>
	
	<?php 
	if (is_home()) :
		/* slideshow */
		echo '<div class="slideshow-wrapper">';
			echo HuGy::get_filmroll_slideshow(get_field('hg_firstpage_slideshow','option'),'firstpage  filmroll','firstpage');
		
			//echo "<div class='teaser-1 teaser-icon teaser'></div>";
			echo HuGy::get_teasers();
			echo "<div class='firstpage-menu-wrapper'>";
			echo "<div class='firstpage-menu'>";
			echo "<a class='nyheter' href='#nyheter'></a>";
			echo "<a class='facebook' href='#facebook'></a>";
			echo "</div></div>";
		echo '</div>';

	endif; ?>

<div class="page-wrapper">
<article class="page">

