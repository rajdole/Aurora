<?php get_header(); ?>
<div id="content">	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="post-info">
			<?php if ( has_post_thumbnail() ) {the_post_thumbnail(array(140, 140,true));} ?>
			<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<p class="postmeta">
				Posted on <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_time(('F jS, Y')) ?></a>
				<?php if (comments_open()) : ?>This post currently has <?php comments_popup_link(('0 comments'), ('1 comment'), ('% comments'), '', ''); ?>.<?php endif; ?><br />			
				Filed under: <?php the_category(', '); ?>. <?php the_tags(('Tagged with: '),', ',''); ?>
			</p>
		</div>
		<div class="entry">
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink() ?>" class="small-button right">Read more ...</a>
			<br class="noCss" />	
		</div>
		<?php if (is_single() || is_page()) { edit_post_link(('Edit this article'), '<p class="admin">', '</p>'); wp_link_pages('before=<p class="pagelink">' . ('Pages:') .' &after=</p>'); } ?>
	</div>

	<?php comments_template('', true); ?>	
	<?php endwhile; ?>
	<div id="pagination">
		<div class="left"><?php next_posts_link(('Previous entries')) ?></div>
		<div class="right"><?php previous_posts_link(('Recent entries')) ?></div>
	</div>
	<?php else : ?>

	<?php if (is_search()) { ?>
	<h1 class="listhead">Search Results</h1>
	<h2 class="post-info title">Nothing found!</h2>
	<div class="entry">
		<p>Sorry, but we couldn't find anything related to your query! Please try again using a different search keyword. </p>
	</div>
	<?php } ?>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>