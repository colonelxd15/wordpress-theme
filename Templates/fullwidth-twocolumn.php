<?php 
/*
Template Name: Full Width Page (Two Columns)
*/
get_header(); ?>
	<section class="container-fluid contents">
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
			<article class="col-md-6">
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
		<?php endwhile; ?>
	</section>
<?php get_footer(); ?>