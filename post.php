<?php get_header(); ?>
<section class="container-fluid contents">
	<!-- <div class="row"> -->
	<div class="col-md-3 contents">
		<?php get_sidebar(); ?>
	</div>
	<div class="col-md-9 contents">
	<?php 
		if(is_front_page()) 
		{
			get_template_part('featured_content');
		}
	?>
	<?php 
		wp_reset_postdata(); 
		while(have_posts()): the_post() 
	?>
			<article>
				<a href="<?php the_permalink(); ?>">
					<?php the_title('<h3 class="entry-title">','</h3>'); ?>
				</a>
				<div class="entry-content">
					<?php 
						// the_content(); 
						the_excerpt();
					?>
				</div>
			</article>
		<?php endwhile; ?>
	</div>
<!-- </div> -->
</section>
<?php get_footer(); ?>