<ul id="sidebar">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>
		<?php get_search_form(); ?>
		<?php wp_list_pages('title_li=<h2>' .('Pages') . '</h2>'); ?>
		<?php wp_list_bookmarks(); ?>
	<?php endif; ?>
	<li>
			<h2>Aurora WordPress theme</h2>
			<ul>
				<li>Developed by :</li>
				<li><a href="http://pushkrajdole.com">Pushkraj Dole</a></li>
				<br />
				<li>Available for sale on : </li>
				<li><a href="http://superhug.com">Superhug</a></li>
			</ul>
		</li>
</ul>
