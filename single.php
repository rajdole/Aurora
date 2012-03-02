<?php get_header(); ?>
<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2 class="post-info title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<?php if (is_attachment()) { ?>
			<p class="attachmentnav">&larr; Back to <a href="<?php echo get_permalink($post->post_parent) ?>" title="<?php echo get_the_title($post->post_parent) ?>" rev="attachment"><?php echo get_the_title($post->post_parent) ?></a></p>
		<?php } else { ?>
		<?php } ?>
		<div class="entry">
			<?php the_content(); ?>
			<br class="noCss" />
			<p class="postmeta">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/time.png" alt="time" class="icon" /><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_time(('F jS, Y')) ?></a><br />			
				Filed under: <?php the_category(', '); ?>. <?php the_tags(('Tagged with: '),', ',''); ?>
			</p>
			<?php wp_link_pages('before=<p class="page-link">&after=</p>&next_or_number=number&pagelink=page %'); ?>
		</div>
	</div>
	<?php comments_template('', true); ?>	
	<?php endwhile; ?>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>