<?php query_posts('category_name=Featured Contents')?>
	<!-- <div class="container-fluid"> -->
	<h2>Featured Contents</h2>
	<?php while(have_posts()): the_post(); ?>
		<article>
		<a href="<?php the_permalink()?>"><?php the_title('<h3 class="entry-title">','</h3>');?></a>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
		</article>
	<?php endwhile; ?>
<!-- </div> -->
