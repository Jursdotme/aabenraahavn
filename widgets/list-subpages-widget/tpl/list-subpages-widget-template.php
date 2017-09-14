

<?php
global $post;
  if($post->post_parent)

		$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");

	else

		$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");

	if ($children) {

    if ($instance['affix']) {
      echo "<div class='myAffix'>";
    } else {
      echo "<div>";
    }


		$parent_title = get_the_title($post->post_parent);

		echo '<a href="' . get_permalink($post->post_parent) . '" class="parent-page">' .
		$parent_title .
		'</a>' .

    "<ul>" .

		$children .
    "</ul>" .
    "</div>";
} ?>
