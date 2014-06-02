<?php 
/*
Template Name: Full Width Page
*/
get_header(); ?>
	<section class="container-fluid contents">
		<?php while(have_posts()) : the_post();?>
			<article>
				<h3 class="entry-header"><?php the_title(); ?></h3>
				<p class="entry-content"><?php the_content(); ?> </p>
				<?php 
				if(comments_open() || get_comments_number()){
					comments_template();
				}
				?>
			</article>
		<?php endwhile; ?>
	</section>
<?php get_footer(); ?>