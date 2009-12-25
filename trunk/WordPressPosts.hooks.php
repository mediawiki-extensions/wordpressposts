<?php

function displayWordPressPosts( $skin, &$bar ) 
{
	global $wgWordPressMaxPosts;
	global $wgWordPressPostsPortletHeading;

	query_posts('posts_per_page='.$wgWordPressMaxPosts);

	$out = '<div class="pBody">'."\n";
	$out .= "<ul>\n";
	if ( !have_posts() )
	{
		$out .= '<li>No posts</li>';
	}
	while ( have_posts() )
	{ 
		the_post();
		$out .= '<li><a href="' . get_permalink() . '">';
		$out .= the_title('','', FALSE );
		$out .= '</a></li>';
	}
	$out .= '</ul>';
	$out .= '</div>';
	$bar[ $wgWordPressPostsPortletHeading ] = $out;
	return true;
}

?>
