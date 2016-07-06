<?php /*
Template Name: Posts listing
URI: http://linesh.com/
Description:  A free mobile phone theme with flexible-width design.  Designed by <a href="http://linesh.com/">Linesh Jose</a>.
Version: 15.05
Author: Linesh Jose 
Author URI: http://linesh.com
roTags: light weight, white, Flexible-width,bottom-sidebar,  translation-ready,
http://linesh.com/
Both the design and code are  released under a Creative Commons Attribution 3.0 Unported License http://creativecommons.org/licenses/by/3.0/
*/?>
<?php get_header(); ?>
<div id="page">
	<!-- Title -->
	<h1>
		<?php if (is_category()): ?><?php single_cat_title(); ?> 
		<?php elseif (is_day()): ?>Archive for <?php the_time('F jS, Y'); ?>
		<?php elseif (is_month()): ?>Archive for <?php the_time('F, Y'); ?>
		<?php elseif (is_year()): ?>Archive for <?php the_time('Y'); ?>
		<?php elseif (is_tag()): ?>Archive for <?php single_tag_title(); ?> 
		<?php elseif (is_search()): ?>Search Results for &ldquo;<?php the_search_query(); ?>&rdquo;
		<?php elseif (is_author()): 
					if(get_query_var('author_name')) :
					$curauth = get_userdatabylogin(get_query_var('author_name'));
					else :
					$curauth = get_userdata(get_query_var('author'));
					endif;
					echo $curauth->display_name; ?>'s  Archives  <?php echo get_the_author() ;?>
		<?php elseif (isset($_GET['paged']) && !empty($_GET['paged'])): ?>Blog Archives
		<?php else : ?>Latest posts
		<?php endif; ?>
	</h1>
	<!-- end Title -->
			
	<div class="posts">
		<?php if (have_posts()) :?>
		<ul class="posts_item">
			<?php   while (have_posts()) : the_post();?>
			<li><a href="<?php the_permalink() ?>" rel="bookmark"  title="Read '<?php the_title(); ?>'"><h2><?php the_title(); ?></h2></a></li>
			<?php endwhile; // end of one post ?>
		</ul>

		<!-- Navigation starts -->
		<div class="navigation">
			<?php next_posts_link('<div class="alignleft button">&laquo; Old Entries </div>') ?>
			<?php previous_posts_link('<div class="alignright button">New Entries &raquo;</div>') ?>
			<div class="clear"></div>
		</div>
		<!-- Navigation ends -->
		
		<?php else: ?>
		
		<!-- If page not found -->
		<div class="content">
			<b>Not Found</b>
			<p >Sorry, but you are looking for something that isn't here.</p>
		</div>
		<?php endif; ?>
	</div>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>