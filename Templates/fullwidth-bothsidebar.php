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
					wp_reset_postdata(); 
				}
			?>
			<?php if(!is_page()) {?>
				<h2> Recent Post </h2>
			<?php }?>	
			<?php 
				while(have_posts()): the_post() 
			?>

				<article>
					<?php if(!is_page()) {?>
						<a href="<?php the_permalink(); ?>">
					<?php }?>
						<?php the_title('<h3 class="entry-title">','</h3>'); ?>
					<?php if(!is_page()) {?>
						</a>
					<?php }?>
					<div class="entry-content">
						<?php 
							if(is_page()){
								the_content();
							}
							else{
								the_excerpt();	
							}
						?>
					</div>
				</article>
				<?php 
					if(!is_page())
					{
						edit_post_link(); 
					}
				?>
			<?php 
				pagination();
				endwhile; 
			?>
		</div>
		<div class="col-md-3 contents">
			<?php get_sidebar('right'); ?>
		</div>
</section>
<?php get_footer(); ?>