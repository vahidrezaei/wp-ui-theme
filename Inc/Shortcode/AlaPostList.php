<?php

namespace Inc\Shortcode;

class AlaPostList
{
	public function register()
	{
		add_shortcode('ala-post-list', array($this, 'ala_post_list_01'));
	}

	public function ala_post_list_01($atts)
	{
		extract(shortcode_atts(array(
			'cat' => null,
			'col' => null,
			'col_md' => null,
		), $atts));

		$the_query = $this->getPost($cat);

		$return_string = '<ul>';

		if ($the_query->have_posts()) {



			while ($the_query->have_posts()) {
				$the_query->the_post();
				$return_string .= '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
			}
		}
		$return_string .= '</ul>';

		return $return_string;

	}

	public function getPost($cat, $pre_page = 4)
	{

		return new \WP_Query(array('cat' => $cat, 'posts_per_page' => $pre_page));
	}
}
