<?php get_header(); ?>
	<section class="container contents">
		<div class="row">
			<div class="col-md-3 contents">
				<?php get_sidebar(); ?>
			</div>
			<div class="col-md-9 contents">
				<?php while(have_posts()): the_post() ?>
					<article>
						<?php the_title('<h3 class="entry-title">','</h3>'); ?>
						<div class="entry-content">
							<?php the_content(); ?>
						</div>
						<?php 
							if(comments_open() || get_comments_number()){
								comments_template();
							}
						?>
					</article>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>