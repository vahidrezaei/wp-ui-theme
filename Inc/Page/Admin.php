<?php

namespace Inc\Page;

use Inc\Api\settingApi;
use Inc\Base\BaseController;
;
use JetBrains\PhpStorm\Pure;


class Admin extends BaseController {
	public settingApi $setting;
	public array $pages;
	public $subpages;



	function register() {

		$this->setting = new settingApi();
		$this->setPage();
		$this->setSubPage();

		//افزودن منو
		$this->setting->addPages( $this->pages )->withSubPage('لیست کامپوننت ها')->addSubPages($this->subpages)->register();
	}
	public function setPage(){
		$this->pages =[
			[
				'page_title' => 'لیست کامپوننت ها',
				'menu_title' => 'آلا ولمنتور',
				'capability' => 'manage_options',
				'menu_slug'  => 'wp-velemtor-list',
				'callback'   => function () {
					return require_once ($this->plugin_path.'/view/admin_view.php');
				},
				'icon_url'   => 'dashicons-schedule',
				'position'   => 110,
				'short_code'=>null
				
			],

		];
	}
	public function setSubPage(){
		$this->subpages =[
			[
				'parent_slug' => 'wp-velemtor-list',
				'page_title' => ' پست ها',
				'menu_title' => ' پست ها',
				'capability' => 'manage_options',
				'menu_slug'  => 'wp-velemtor-post',
				'callback'   =>   function () {
					return require_once($this->plugin_path.'/view/post_view.php');
				},

			],
			[
				'parent_slug' => 'wp-velemtor-list',
				'page_title' => 'آیکون مراکز',
				'menu_title' => 'آیکون مراکز',
				'capability' => 'manage_options',
				'menu_slug'  => 'wp-velemtor-icon',
				'callback'   =>   function () {
					return require_once($this->plugin_path.'/view/markaz_icon_view.php');
				},
			],
			[
				'parent_slug' => 'wp-velemtor-list',
				'page_title' => 'شبکه اجتماعی',
				'menu_title' =>'شبکه اجتماعی',
				'capability' => 'manage_options',
				'menu_slug'  => 'wp-velemtor-social',
				'callback'   =>   function () {
					return require_once($this->plugin_path.'/view/fix_social_view.php');
				},
			]
		];
	}
}
