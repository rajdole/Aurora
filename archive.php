<?php get_header(); ?>
<div id="content">
	<?php
	if (is_category()) {
   		echo '<h1 class="listhead">';
   		("Category");
   		single_cat_title();
   		echo '</h1>';
   	} if (is_tag()) {
   		echo '<h1 class="listhead">';
   		("Tag");
   		single_tag_title();
   		echo '</h1>';
   	} if (is_search()) {
   		echo '<h1 class="listhead">';
		("Search");
		echo 'Search Result for ',
		get_search_query(),
		'</h1>';
   	}
	if (is_month()) {
   		echo '<h1 class="listhead">';
   		("Tag");
		the_time('F, Y');
   		echo '</h1>';
   	}
		if (is_year()) {
   		echo '<h1 class="listhead">';
   		("Tag");
		the_time('Y');
   		echo '</h1>';
   	}
   	?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2 class="post-info title archive"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<?php if (is_attachment()) { ?>
			<p class="attachmentnav">&larr; Back to <a href="<?php echo get_permalink($post->post_parent) ?>" title="<?php echo get_the_title($post->post_parent) ?>" rev="attachment"><?php echo get_the_title($post->post_parent) ?></a></p>
		<?php } ?>
		<div class="entry">
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink() ?>" class="small-button right">Read this post ...</a>
			<br class="noCss" />
		</div>
	</div>
	<?php endwhile; ?>
	<div class="left"><?php next_posts_link(('Previous entries')) ?></div>
	<div class="right"><?php previous_posts_link(('Recent entries')) ?></div>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>