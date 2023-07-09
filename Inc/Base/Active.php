<?php
namespace Inc\Base;
class Active{
    public static function activate(){
	    self::create_social_tbl();
	    flush_rewrite_rules();
    }

	public static function create_social_tbl() {
		global $wpdb;

		$q = "CREATE TABLE `ala_social_icon` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `active` INT NOT NULL DEFAULT 0,
  `eita` MEDIUMTEXT NULL,
  `telegram` MEDIUMTEXT NULL,
  `instagram` MEDIUMTEXT NULL,
  `bale` MEDIUMTEXT NULL,
  `aparat` MEDIUMTEXT NULL,
  `robika` MEDIUMTEXT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;";
		$wpdb->get_results($q);
		$q = "CREATE TABLE `ala_campaign` (
      `id` INT NOT NULL AUTO_INCREMENT,
      `active` INT NOT NULL DEFAULT 0,
      `title` MEDIUMTEXT NULL,
      `photo` MEDIUMTEXT NULL,
      `tozih` MEDIUMTEXT NULL,
      `mablagh` INT NOT NULL DEFAULT 0,
      `current_pay` INT NOT NULL DEFAULT 0,
      PRIMARY KEY (`id`))
    ENGINE = InnoDB
    DEFAULT CHARACTER SET = utf8;";
	}

}