	<br class="noCss" />
</div>
	<div id="footer">
		<p class="alignleft">
			Copyright &copy; <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
		</p>

		<p class="alignright">
			Powered by <a href="http://www.wordpress.org">WordPress</a> | 
			Framework developed by <a href="http://www.pushkrajdole.com">Pushkraj Dole</a>
		</p>
		<?php echo get_option('ab_footer_copy'); ?>
	</div>
<?php wp_footer(); ?>
</body>
</html>