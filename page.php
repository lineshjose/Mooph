<?php /*
Template Name: Default page
URI: http://linesh.com/
Description:  A free mobile phone theme with flexible-width design.  Designed by <a href="http://linesh.com/">Linesh Jose</a>.
Version: 15.05
Author: Linesh Jose 
Author URI: http://linesh.com
roTags: light weight, white, Flexible-width,bottom-sidebar,  translation-ready,
http://linesh.com/
Both the design and code are released under  a Creative Commons Attribution 3.0 Unported License http://creativecommons.org/licenses/by/3.0/
*/?>
<?php get_header(); ?>
	<div id="page">
		<h1 class="pagetitle"><?php the_title(); ?></h1>
		<div  class="<?php the_ID(); ?> posts">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="content">
				<?php the_content(); ?>
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>