<?php
/*
Template Name: Without hero section
*/
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package emart-shop
 */

get_header();

$layout = emart_shop_get_option('page_layout');

/**
* Hook - emart_shop_container_wrap_start 	
*
* @hooked emart_shop_container_wrap_start	- 5
*/
 do_action( 'emart_shop_container_wrap_start', esc_attr( $layout ) );

	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', 'page' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile; // End of the loop.
		
/**
* Hook - emart_shop_container_wrap_end	
*
* @hooked container_wrap_end - 999
*/
 do_action( 'emart_shop_container_wrap_end', esc_attr( $layout ));
get_footer();