<?php get_header(); ?>
	<section class="container-fluid contents">
		<div class="row">
			<div class="col-md-3 contents">
				<?php get_sidebar(); ?>
			</div>
			<div class="col-md-9 contents">
				<?php while(have_posts()): the_post() ?>
					<article>
						<?php if(!is_page()) {?>
						<a href="<?php the_permalink(); ?>">
						<?php }?>
							<?php the_title('<h3 class="entry-title">','</h3>'); ?>
						<?php if(!is_page()) {?>
							</a>
						<?php }?>
						<div class="entry-content">
							<?php the_content(); ?>
						</div>
						<?php 
							if(!is_page()){
								if(comments_open() || get_comments_number()){
									edit_post_link();
									comments_template();
								}
							}
						?>
					</article>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>