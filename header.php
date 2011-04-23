<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/site-nav.php" rel="site-nav.php" type="text/css" />
    <title>
	<?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * twentyten_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?>
    </title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
    ?>
  </head>

  <body <?php body_class(); ?>>
    <div class="maincontainer">
      <div class="banner">
        <div class="socialmediaicons">
          <ul>
		<li class="icon"><a href="http://www.facebook.com/group.php?gid=104341466270678"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facbook.png" /></a></li>
	    	<li class="icon"><a href="http://twitter.com/richmondiww"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twittericon.png" /></a></li>
        	<li class="icon"><a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/rssicon.png" /></a></li>
	  </ul>
        </div>
      </div>  

      <div class="navcontainer">
	<div class="buttoncontainer">
          <ul><?php wp_list_pages('depth=1&title_li='); ?></ul>
	</div>
     </div>
     <div class="spacer">