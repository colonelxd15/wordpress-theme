<?php 
/*
Template Name: Full Width Page (Three Columns)
*/
get_header(); ?>
	<section class="container-fluid contents">
		<?php while(have_posts()): the_post() ?>
			<article class="col-md-4">
				<h3 class="entry-title"><?php the_title(); ?></h3>
				<div class="entry-content"><?php the_content(); ?></div>
				<!--<?php 
					//if(comments_open() || get_comments_number()){
					//	comments_template();
					//}
				?>-->
			</article>
		<?php endwhile; ?>
	</section>
<?php get_footer(); ?>