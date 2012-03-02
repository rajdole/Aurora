<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php if (is_home () ) { bloginfo('name'); } elseif (is_category() || is_tag()) { single_cat_title(); echo ' &bull; ' ; bloginfo('name'); } elseif (is_single() || is_page()) { single_post_title(); } else { wp_title('',true); } ?></title>
<?php if(get_option('ab_favicon')): ?>
    <link rel="shortcut icon" href="<?php echo get_option('ab_favicon'); ?>">
<?php endif; ?>
<?php if(get_option('ab_template_styles')=='blue'){ ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/blue.css" type="text/css" />
<?php }elseif(get_option('ab_template_styles')=='orange'){ ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>orange.css" type="text/css" />
<?php } ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="header">
		<div class="wrapper">
			<h1 class="blog-title left"><a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>" name="top"><?php bloginfo('name'); ?></a> <span><?php bloginfo('description'); ?></span></h1>
			<div class="right">
			<?php wp_nav_menu(array('container_class' => 'menu-header', 'menu_id' => 'menu-navigation', 'theme_location' => 'primary')); ?>
			</div>
			<br class="noCss" />
		</div>
	</div>
	<div id="collab" class="wrapper">