<?php

namespace Inc\Shortcode;

class AlaPostList
{
	public function register()
	{
		add_shortcode('ala-post-list', array($this, 'ala_post_list_01'));
		add_shortcode('ala-post-list2', array($this, 'ala_post_list_02'));
	}

	public function ala_post_list_01($atts)
	{
		extract(shortcode_atts(array(
			'cat' => null,
			'col' => null,
			'col_md' => null,
		), $atts));

		$the_query = $this->getPost($cat);

		$return_string = '<div class="container txt-justify">';
		$return_string .='<div class="row row2">';

		if ($the_query->have_posts()) {
			while ($the_query->have_posts()) {
				$the_query->the_post();

				$featured_img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
				$return_string .=' <div class="col-12 col-md-3">';
				$return_string .='<div class="index-card" style="flex-direction: column;justify-content: space-between;">';
				$return_string .=' <a href="' . get_permalink() . '" class="text-darck post-link" >';
				$return_string .='<div class="card " style="    border-radius: 15px;overflow:hidden; border: none;">';
				$return_string .='<div style="margin:8px">';
				$return_string .='<img src="'.esc_url($featured_img_url).'"  class="card-img" alt="' . get_the_title() . '" style="    border-radius: 20px;width: 100%; object-fit: cover;">';
				$return_string .='</div>';
				$return_string .='<div class="card-body">';
				$return_string .='<h2 class="card-title text-right" style="    font-size: 14px; line-height: 25px; text-align: justify;">' . get_the_title() . '</h2>';
				$return_string .='</div>';//card-body
				$return_string .='</div>';//card
				$return_string .='<a href="' . get_permalink() . '" class="text-darck btn " style="    margin-bottom: 13px; color: black;" >ادامه خبر</a>';
				$return_string .='</div>';//card-index
				$return_string .='</div>';//col-12
//				$return_string .= '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
			}
			$return_string .='</div>';//row
			$return_string .='</div>';//container
		}
		$return_string .= '</ul>';

		return $return_string;

	}
	public function ala_post_list_02($atts)
	{
		extract(shortcode_atts(array(
			'cat' => null,
			'col' => null,
			'col_md' => null,
			'show_title' => null,
		), $atts));

		$the_query = $this->getPost($cat);

		$return_string = '<div class="container txt-justify">';

		

		if ($the_query->have_posts()) {
			while ($the_query->have_posts()) {
				$the_query->the_post();

				$featured_img_url = get_the_post_thumbnail_url( get_the_ID() );

				$return_string .=' <div class="col-12 col-md-3">';
				$return_string .=' <a href="' . get_permalink() . '" class="text-darck post-link" >';
				$return_string .='<div style="margin:8px">';
				$return_string .='<img src="'.$featured_img_url.'"  class="card-img" alt="' . get_the_title() . '" style="    border-radius: 20px;width: 100%; object-fit: cover;">';
				$return_string .='</div>';
				$return_string .='</a> ';
				$return_string .='</div>';
			}
			$return_string .='</div>';//row
			$return_string .='</div>';//container
		}
		$return_string .= '</ul>';

		return $return_string;

	}
	public function getPost($cat, $pre_page = 4)
	{

		return new \WP_Query(array('cat' => $cat, 'meta_query' => array('key' => '_thumbnail_id') ,'posts_per_page' => $pre_page));
	}

}
