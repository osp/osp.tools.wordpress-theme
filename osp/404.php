<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 */

get_header(); ?>


<div class="bgform"></div>

<div class="wrapper" id="wrapper">	
	<div class="container">

	<article class="error404">
	
		<header>
			<h1><?php _e( 'This page doesn\'t register.', 'migration' ); ?></h1>
		</header>

		<div>
			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'migration' ); ?></p>
			<?php get_search_form(); ?>
			
		</div>
		
	</article>
		</div>
</div>

<?php get_footer(); ?>