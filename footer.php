<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->



	<div id="pr-footer">
		
		<ul>
			<li>&copy; 2009 - 2013 <a href="<?php echo home_url( '/' ); ?>">Klimabündnis im Mühlenkreis e.V.</a></li>
			<li><a href="<?php echo home_url( '/' ); ?>sitemap/">Sitemap</a></li>
			<li><a href="<?php echo home_url( '/' ); ?>category/protokolle/">Protokolle</a></li>
			<li><a href="<?php echo home_url( '/' ); ?>impressum/">Impressum</a></li>
			<li><a href="<?php echo home_url( '/' ); ?>kontakt/">Kontakt</a></li>
		</ul>
		
		<a href="#" id="toplink" title="Zurück nach oben!"></a>
	</div>

</div><!-- #wrapper -->


<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

	<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/superfish.js'></script>
	<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/custom.js'></script>

</body>
</html>
