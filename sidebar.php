<?php /*
Template Name: Sidebar
URI: http://linesh.com/
Description:  A free mobile phone theme with flexible-width design.  Designed by <a href="http://linesh.com/">Linesh Jose</a>.
Version: 15.05
Author: Linesh Jose 
Author URI: http://linesh.com
roTags: light weight, white, Flexible-width,bottom-sidebar,  translation-ready,
http://linesh.com/
Both the design and code are released  under a Creative Commons Attribution 3.0 Unported License http://creativecommons.org/licenses/by/3.0/
	*/?>
<!-- Sidebar -->
<div id="sidebar">
	<div id="page">	
		<?php _e('<h3 id="pages">Pages</h3>'); ?>
		<ul>
		<?php wp_list_pages('title_li=&depth=1'); ?>
		</ul>
		<div class="righttext"><a href="#top">^Top</a>&nbsp;&nbsp;&nbsp;</div>
	</div>

	<div id="page">	
		<?php _e('<h3 id="categories">Categories</h3>'); ?>
		<ul>
			<?php wp_list_categories('depth=1&title_li='); ?>
		</ul>
		<div class="righttext"><a href="#top">^Top</a>&nbsp;&nbsp;&nbsp;</div>
	</div>
	
	<div id="page">	
		<?php _e('<h3 id="archives">Archives</h3>'); ?>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
		<div class="righttext"><a href="#top">^Top</a>&nbsp;&nbsp;&nbsp;</div>
	</div>

	<div id="page">	
		<?php _e('<h3 id="feeds">Feeds</h3>'); ?>
		<ul >		
			<li><a href="<?php bloginfo_rss( 'rss2_url' ); ?>" title="Syndicate this site using RSS 2.0">Entries <abbr title="Really Simple Syndication">RSS 2.0</abbr></a></li>
			<li><a href="<?php bloginfo_rss( 'atom_url' ); ?>" title="Syndicate this site using atom">Entries <abbr title="Really Simple Syndication">Atom</abbr></a></li>
			<li><a href="<?php bloginfo_rss( 'comments_rss2_url' ); ?>" title="The latest comments to all posts in RSS">Comments <abbr title="Really Simple Syndication">RSS 2.0</abbr></a></li>
		</ul>
		<div class="righttext"><a href="#top">^Top</a>&nbsp;&nbsp;&nbsp;</div>
	</div>
</div>
<!-- Sidebar  ends-->	