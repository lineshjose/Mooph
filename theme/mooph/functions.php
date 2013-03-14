<?php /*
Function name: Functions
URI: http://lineshjose.com/
Description:  A free mobile phone theme with flexible-width design.  Designed by <a href="http://lineshjose.com/">Linesh Jose</a>.
Version: 11.3
Author: Linesh Jose 
Author URI: http://linesjose.com
roTags: light weight, white, Flexible-width,bottom-sidebar,  translation-ready,
http://lineshjose.com/
Both the design and code are  released under a Creative Commons Attribution 3.0 Unported License http://creativecommons.org/licenses/by/3.0/
*/

/* Localization Initialize ********************************************/
load_theme_textdomain('Clean');

//Callback functions for comment output
function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
   
			<div class="info">
			<?php printf(__('<cite class="fn">%s</cite>','Clean'), get_comment_author_link()) ?>
			<small><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"> <?php printf(__('%1$s &bull; %2$s'), get_comment_date(),  get_comment_time()) ?></a></small>
			<?php if ( $comment->comment_approved == '0' ) : ?>(<em><?php _e( 'Your comment is awaiting moderation.', 'twentyten' ); ?></em>)<?php endif; ?> 
					<?php edit_comment_link( __( '(Edit this)', 'twentyten' ), ' ' );?>
					</div>
		<div class="text"><?php comment_text() ?></div>
		<!-- #comment-##  -->
<?php
        }
// add a microid to all the comments
function comment_add_microid($classes) {
	$c_email=get_comment_author_email();
	$c_url=get_comment_author_url();
	if (!empty($c_email) && !empty($c_url)) {
		$microid = 'microid-mailto+http:sha1:' . sha1(sha1('mailto:'.$c_email).sha1($c_url));
		$classes[] = $microid;
	}
	return $classes;	
}
add_filter('comment_class','comment_add_microid');
?>