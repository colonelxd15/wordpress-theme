<?php 
/*
Template Name: Full Width Page With Left and Right Sidebars
 */
get_header(); ?>
	<section class="container-fluid contents">
		<div class="col-md-3 contents">
			<?php get_sidebar(); ?>
		</div>
		<div  class="col-md-6 contents">
			<?php 
				if(is_front_page()) 
				{
					get_template_part('featured_content');
				}
			?>
			<?php 
				// query_posts('category_name='); 
				wp_reset_postdata();
				while(have_posts()): the_post() 
			?>
				<article>
					<a href="<?php the_permalink()?>">
						<?php the_title('<h3 class="entry-title">','</h3>'); ?>
					</a>
					<?php the_content('<div class="entry-content">','</div>'); ?>
				</article>
			<?php endwhile; ?>
		</div>
		<div class="col-md-3 contents">
			<?php get_sidebar('right'); ?>
		</div>
</section>
<?php get_footer(); ?>