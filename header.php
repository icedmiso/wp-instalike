<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
   <head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	   <script src="http://rin.sky-song.org/wp-content/themes/basic/scroll.js"></script>
	   <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@14.0.0/dist/smooth-scroll.polyfills.min.js"></script>
	<title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
     <?php wp_head(); ?> 
	   
	   <div id="header">
		   <h1>
			   <a href="http://rin.sky-song.org/"><?php bloginfo('name'); ?></a>
		   </h1>
		   <div id="navigation">
		   <ul>
			   <li> <a href="http://rin.sky-song.org/about">About</a></li>
			   <li> <a href="http://rin.sky-song.org/archives">Archives</a></li>
			   <li> <a href="http://rin.sky-song.org/contact">Contact</a></li>
		   </ul>
		   </div>
	   	</div>
	   
   </head>
     <body>
		
        <div id="container">
          <?php get_sidebar(); ?>
           <div id="content">
