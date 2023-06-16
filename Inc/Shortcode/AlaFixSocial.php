<?php

namespace Inc\Shortcode;

class AlaFixSocial {
	public function register() {
		add_action('wp_footer',  array( $this, 'ala_fix_social' ) );
//		add_shortcode( 'ala-post-list', array( $this, 'ala_fix_social' ) );
	}


	public function ala_fix_social() {
		global $wpdb;
		$row = $wpdb->get_row("SELECT * FROM ala_haram.ala_social_icon order by id desc limit 1");
if ($row->active == '1'){

		ob_start();
		?>
        <div class="fix-social">
            <a href="<?= @$row->eita ?? ''  ?>" style="<?= empty($row->eita) ? 'display:none' : '' ?>" target="_blank" rel=" noopener">
                <div class="eita"></div>
            </a>
            <a href="<?= @$row->robika ?? ''  ?>"style="<?= empty($row->robika) ? 'display:none' : '' ?>"  target="_blank" rel=" noopener">
                <div class="roubika"></div>
            </a>
            <a href="<?= @$row->aparat ?? ''  ?>" style="<?= empty($row->aparat) ? 'display:none' : '' ?>" target="_blank" rel=" noopener">
                <div class="aparat"></div>
            </a>
            <a href="<?= @$row->bale ?? ''  ?>"style="<?= empty($row->bale) ? 'display:none' : '' ?>"  target="_blank" rel=" noopener">
                <div class="bale"></div>
            </a>
            <a href="<?= @$row->instagram ?? ''  ?>"style="<?= empty($row->instagram) ? 'display:none' : '' ?>"  target="_blank" rel=" noopener">
                <div class="insta"></div>
            </a>
            <a href="<?= @$row->telegram ?? ''  ?>"style="<?= empty($row->telegram) ? 'display:none' : '' ?>"  target="_blank" rel=" noopener">
                <div class="telegram"></div>
            </a>
        </div>
		<?php
		ob_flush();

	}
	}
}
