
			<footer class="footer" role="contentinfo">
				<div class="wrap">
					<nav>
						<?php footer_nav(); ?>
					</nav>
				<p class="copyright">
					&copy; <?php echo date("Y"); ?> Copyright <?php bloginfo('name'); ?>
				</p>
			</div>
			</footer>

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
			var _gaq=[['_setAccount','UA-XXXXXXXX-XX'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)})(document,'script');
		</script>

	</body>
</html>
