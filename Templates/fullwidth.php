<?php 
/*
Template Name: Full Width Page
*/
get_header(); ?>
	<section class="container-fluid contents">
		<?php 
			if(is_front_page()) 
			{
				get_template_part('featured_content');
			}
		?>
		<?php while(have_posts()) : the_post();?>
			<article>
				<a href="<?php the_permalink(); ?>">
					<?php the_title('<h3 class="entry-header">','</h3>'); ?>
				</a>
				<?php the_content('<p class="entry-content">','</p>'); ?>
			</article>
		<?php endwhile; ?>
	</section>
<?php get_footer(); ?>