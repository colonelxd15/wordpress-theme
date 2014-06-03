<?php 
/*
Template Name: Full Width Page With Left Sidebar Only
 */
get_header(); ?>
	<section class="container-fluid contents">
		<div class="col-md-3 contents">
			<?php get_sidebar(); ?>
		</div>
		<div class="col-md-9 contents">
			<?php while(have_posts()): the_post() ?>
				<article>
					<a href="<?php the_permalink(); ?>">
						<?php the_title('<h3 class="entry-title">','</h3>'); ?>
					</a>
					<?php the_content('<div class="entry-content">','</div>'); ?>
				</article>
			<?php endwhile; ?>
		</div>
	</section>
<?php get_footer(); ?>