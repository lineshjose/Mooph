<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head profile="http://gmpg.org/xfn/11">
<title>
<?php	
/*	 * Print the <title> tag based on what is being viewed.	 */	
global $page, $paged;	wp_title( '-', true, 'right' );	
// Add the blog name.	
bloginfo( 'name' );	
// Add the blog description for the home/front page.	
$site_description = get_bloginfo( 'description', 'display' );	
if ( $site_description && ( is_home() || is_front_page() ) )		echo " | $site_description";	
// Add a page number if necessary:	
if ( $paged >= 2 || $page >= 2 )		echo ' - ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );	?>
</title>
<meta name="Author" content="Linesh Jose (www.lineshjose.com)" />
<?php if (is_single() || is_page() ) : if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<meta name="description" content="<?php the_excerpt_rss(); ?>" />
<?php endwhile; endif; elseif(is_home()) : ?>
<meta name="description" content="<?php bloginfo('description'); ?>" />
<?php endif; ?>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php if(is_search()) { ?>
<meta name="robots" content="noindex, nofollow" />
<?php } else {?>
<meta name="Robots" content="index,follow" />
<?php } ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<body id="top">
<div id="container">
<div id="header">
  <div class="logo">
    <div class="title"> <a href="<?php bloginfo('url'); ?>/">
      <?php bloginfo('name'); ?>
      </a> <span>
      <?php bloginfo('description'); ?>
      </span> </div>
  </div>
  <div class="page_links">
    <ul >
      <li><a href="<?php echo get_option('home'); ?>/" >Home</a></li>
      <li><a href="#pages" >Pages</a></li>
      <li><a href="#categories" >Categories</a></li>
      <li><a href="#archives" >Archives</a></li>
      <li><a href="#feeds" >Feeds</a></li>
      <div class="clear"></div>
    </ul>
  </div>
</div>
<!-- end header -->
<div id="page">
  <form method="get" id="searchform"  action="<?php bloginfo('url'); ?>/">
    <input type="hidden" id="searchsubmit" value="Search" />
    <table cellpadding="0" cellspacing="0" class="searchform" >
      <tr>
        <th>Search</th>
        <td class="search"><input type="text" class="textbox" value="" name="s" id="s" /></td>
        <td class="searchbutton" ><input type="submit" id="searchsubmit" value="Go" /></td>
      </tr>
    </table>
  </form>
</div>
