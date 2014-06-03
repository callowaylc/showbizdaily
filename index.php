<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
ob_start();
require('./wp-blog-header.php');
$content = ob_get_clean();


if (isset($_SERVER[$name = 'HTTP_X_FORWARDED_SCHEME'])) {
  preg_match_all(
    '/\<\!— start —\>.+?<\!— end —\>/is', 
    $content,
    $matches
  );

  $keep    = implode("\n", $matches[0]);
  $content = preg_replace(
    '/\<body(.+?)>.+?\<\/body\>/is', 
    "<body $1 style='visibility:hidden; background:white' >$keep</body>",
    $content
  );

  // finally respond with vary header for forwarded header
  header( "Vary: x-forwarded-scheme" );
}

echo $content;
