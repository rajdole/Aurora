<?php get_header(); ?>
<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2 class="post-info title"><?php the_title(); ?></h2>
		<?php if (is_attachment()) { ?>
			<p class="attachmentnav">&larr; Back to <a href="<?php echo get_permalink($post->post_parent) ?>" title="<?php echo get_the_title($post->post_parent) ?>" rev="attachment"><?php echo get_the_title($post->post_parent) ?></a></p>
		<?php } ?>
		<div class="entry">
			<?php the_content(); ?>
			<br class="noCss" />
			<?php wp_link_pages('before=<p class="page-link">&after=</p>&next_or_number=number&pagelink=page %'); ?>
		</div>
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>