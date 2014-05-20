<?php
/**
 * Template Name: Links
 *
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

				<div class="breadcrumb">
					Sie sind hier: <?php if(function_exists('bcn_display')){bcn_display();}?>
				</div>			

				<ul class="links"><?php wp_list_bookmarks(); ?></ul>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
