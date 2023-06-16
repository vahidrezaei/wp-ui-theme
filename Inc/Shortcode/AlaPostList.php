<?php

namespace Inc\Shortcode;

class AlaPostList
{
	public function register()
	{
		add_shortcode('ala-post-list', array($this, 'form_generate'));
	}

	public function form_generate()
	{
		ob_start();
		?>
		 <div>
			<span>text</span>
			<a href="#">link</a>
		</div>

	<?php
	 ob_flush();

	}
}
