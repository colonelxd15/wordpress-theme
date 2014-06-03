<?php 
/*
Template Name: Full Width Page With Right Sidebar Only
*/
get_header(); ?>
	<section class="container-fluid contents">
		<div class="col-md-9 contents">
			<?php while(have_posts()) : the_post() ?>
				<article>
					<a href="<?php the_permalink(); ?>">
						<?php the_title('<h3 class="entry-header">','</h3>'); ?>
					</a>
					<?php the_content('<p class="entry-content">','</p>'); ?> 
				</article>
			<?php endwhile; ?>
		</div>
		<div class="col-md-3 contents">
			<?php get_sidebar('right'); ?>
		</div>
	</section>
<?php get_footer(); ?>
