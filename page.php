<?php get_header(); ?>

	<!-- section -->
	<section role="main">
	<div class="wrap">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php the_content(); ?>
	<!-- <div class="contentwrap">
		<h4><a href="#" class="info-activator">Mehr Info</a></h4>
		<div class="info">
		</div>
	</div> -->


			<br class="clear">


		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>


	<?php endif; ?>




</div>
	</section>
	<!-- /section -->


<?php get_footer(); ?>
