<?php
/*
Template Name: Search Page
 */
 get_header();
?>
	<section class="container-fluid contents">
		<div class="col-md-12 contents">
			<?php get_search_form(); ?>

			<?php 
				if(have_posts()) : 
				while(have_posts()) : the_post()
			?>
				<article>
					<a href="<?php the_permalink(); ?>">
						<?php the_title('<h3 class="entry-title">','</h3>'); ?>
					</a>
					<?php the_content('<div class="entry-content">','</div>'); ?>
				</article>
			<?php endwhile; ?>
			<?php else : ?>
				<article>
					<h4>No Results Found!</h4>
				</article>
			<?php endif; ?>
		</div>
	</section>
<?php get_footer(); ?>