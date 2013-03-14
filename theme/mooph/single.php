<?php /*
Template Name: Single post view
URI: http://lineshjose.com/
Description:  A free mobile phone theme with flexible-width design.  Designed by <a href="http://lineshjose.com/">Linesh Jose</a>.
Version: 11.3
Author: Linesh Jose 
Author URI: http://linesjose.com
roTags: light weight, white, Flexible-width,bottom-sidebar,  translation-ready,
http://lineshjose.com/
Both the design and code are released  under a Creative Commons Attribution 3.0 Unported License http://creativecommons.org/licenses/by/3.0/
*/?>
<?php get_header(); ?>
	<div id="page">
	<!-- Title -->
			<h1 class="pagetitle"><?php the_title(); ?></h1>
			<!-- end Title -->
		<div  class="<?php the_ID(); ?> posts">
			<ul class="metadata">
				<li class="date"><b><?php the_author_posts_link() ?>  on : 	<span>
				<a href="<?php  bloginfo('url');?>/<?php echo get_the_date('Y');?>/<?php echo get_the_date('m');?>/<?php echo get_the_date('d');?>/" >
				<!-- Post Date--><?php echo get_the_date();?></span> </a>
				in </b> <?php the_category(' , ') ?></li>
				<!-- Post Comments-->
				<?php edit_post_link('Edit this','<!-- Post Edit--><li class="border">','</li>'); ?> 
			</ul>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="content">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<div class="navigation"><div class="num_page">', 'after' => '</div></div>', 'next_or_number' => '', 'nextpagelink'     => __('Read More<big>&raquo;</big>'), 'previouspagelink' => __('<big>&laquo;</big>Go Back'))); ?>
			</div>	
		<?php endwhile; else: ?>
			<?php endif; ?>
			<!-- Post Ends -->
			<?php comments_template(); ?>
		</div>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>