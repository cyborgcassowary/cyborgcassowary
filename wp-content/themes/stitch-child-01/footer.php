<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Stitch
 * @since Stitch 1.0
 */
?>

	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			&copy <?php echo date('Y'); ?>, Cyborg Cassowary <span class="sep"></span> <span style="color:#999">Kegs are meant to be kicked. Music is meant to be played.</span>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>