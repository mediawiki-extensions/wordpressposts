<?php
global $wgWordPressMaxPosts;
global $wgWordPressPostsPortletHeader;
//global $wgWordPressPath;

$wgWordPressMaxPosts = 5; // default value
$wgWordPressPostsPortletHeading = "blog posts";

$wgAutoloadClasses['WordPressPostsHooks'] = dirname(__FILE__) . '/WordPressPosts.hooks.php';

$wgHooks['SkinBuildSidebar'][] = 'displayWordPressPosts';

$wgExtensionCredits['parserhook'][] = array(
       'name' => 'WordPressPosts',
       'author' =>'[http://neurov.is/on Jonathan Williford]', 
       'url' => 'http://www.mediawiki.org/wiki/Extension:WordPressPosts', 
       'description' => 'Lists recent WordPress blog posts in the MediaWiki sidebar.'
       );

?>
