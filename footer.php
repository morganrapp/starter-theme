<?php
/**
 * The footer template
 *
 * Contains the closing of <div id="main"> and all content after.
 *
 * @package Starter_Theme
 */
?>
 
	</div><!-- #main -->
 
</div><!-- #page -->
 
<footer id="colophon" role="contentinfo">
	<div id="copyright">
		&copy; <?php echo date("Y"); ?> <?php echo bloginfo( "name" ); ?><br>
		<a href="http://octoberink.com" rel="nofollow">Site by October Ink!</a>
	</div>
</footer><!-- #colophon -->
 
<?php wp_footer(); ?> 
</body>
</html>
