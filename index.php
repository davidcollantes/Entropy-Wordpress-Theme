<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article>
		<div class="container">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="copy">
				<?php the_content(); ?>
			</div>
			<time><a href="<?php the_permalink(); ?>"><?php the_time('F jS, Y') ?></a></time>
		</div>
	</article>
	<?php endwhile; ?>
	<?php else : ?>
	<article>
		<div class="container">
			<h2>No matching results.</h2>
			<p>You're on the wrong side of town, brother. <a href="<?php echo get_settings('home'); ?>">Return to homepage.</a></p>
		</div>
	</article>
	<?php endif; ?>
	<div class="pagination">
		<ul>
			<li><?php previous_posts_link('&larr; Previous Page', 0) ?></li>
			<li><?php next_posts_link('Next Page &rarr;', 0); ?></li>
		</ul>
	</div>
	<?php get_footer(); ?>