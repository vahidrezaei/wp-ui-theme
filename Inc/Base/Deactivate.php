<?php
namespace Inc\Base;
class Deactivate{
    public static function deactivate(){
		self::drop_social_tbl();
        flush_rewrite_rules();
    }

	public static function drop_social_tbl(  ) {
		global $wpdb;

		$q = "DROP TABLE  `ala_social_icon`";
		$wpdb->get_results($q);
	}
}