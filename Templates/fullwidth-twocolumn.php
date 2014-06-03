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
			}
		?>
		<?php while(have_posts()): the_post() ?>
			<article class="col-md-6">
				<a href="<?php the_permalink(); ?>">
					<?php the_title('<h3 class="entry-title">','</h3>'); ?>
				</a>
				<?php the_content('<div class="entry-content">','</div>'); ?>
			</article>
		<?php endwhile; ?>
	</section>
<?php get_footer(); ?>