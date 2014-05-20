<?php
/**
 * The template for displaying Category "Aktuelles"
 *
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

				<div class="breadcrumb">
					Sie sind hier: <?php if(function_exists('bcn_display')){bcn_display();}?>
				</div>		
			
				<h1 class="entry-title">Protokolle</h1>
				
				<p>Dieser Bereich ist nur für Mitglieder des Klimabündnis zugänglich und enthält Sitzungsprotokolle der Arbeitsgruppen.</p>
				
				<hr/>
				
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
				?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
