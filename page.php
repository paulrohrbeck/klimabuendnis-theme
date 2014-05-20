<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

				<div class="breadcrumb">
					Sie sind hier: <?php if(function_exists('bcn_display')){bcn_display();}?>
				</div>			

				<!--[if lte IE 7]>
							<div id="ie-message">
								 <span class="title">Warnung:</span> Sie benutzen eine veraltete Version des Internet Explorers. Updaten Sie Ihren <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx">Internet Explorer</a> oder wechseln Sie zu <a href="http://www.mozilla.com/firefox">Mozilla Firefox</a> (empfohlen).
							</div>
				<![endif]-->
				
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php /*if ( is_front_page() ) {*/ ?>
						<!-- <h2 class="entry-title"><?php the_title(); ?></h2> -->
					<?php /*} else { */?>	
						<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php /* } */ ?>				

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

				<?php comments_template( '', true ); ?>

<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
