<?php

namespace Inc\Page;

use Inc\Api\settingApi;
use Inc\Base\BaseController;
use JetBrains\PhpStorm\Pure;


class Admin extends BaseController {
	public settingApi $setting;
	public array $pages;
	public $subpages;

	public function __construct() {
		$this->setting = new settingApi();
		$this->pages =[
			[
				'page_title' => 'لیست کامپوننت ها',
				'menu_title' => 'آلا ولمنتور',
				'capability' => 'manage_options',
				'menu_slug'  => 'wp-velemtor-list',
				'callback'   => function () {
					echo 'component list';
				},
				'icon_url'   => 'dashicons-schedule',
				'position'   => 110
			],

		];
		$this->subpages =[
			[
				'parent_slug' => 'wp-velemtor-list',
				'page_title' => 'لیست پست ها',
				'menu_title' => 'لیست پست ها',
				'capability' => 'manage_options',
				'menu_slug'  => 'wp-velemtor-post',
				'callback'   =>   function () {
					echo 'post list';
				},

			]
		];
	}

	function register() {
		//افزودن منو
//        add_action('admin_menu',array($this,'adminPage'));
		$this->setting->addPages( $this->pages )->withSubPage('dashboard')->addSubPages($this->subpages)->register();
	}

//       function adminPage(){
//         add_menu_page('لیست کامپوننت ها', 'آلا ولمنتور', 'manage_options', 'wp-velemtor-list', array($this,'adminView'), 'dashicons-schedule');
//       }
//
//       function adminView(){
//         require_once $this->plugin_path.'view/componentList.php';
//       }
}
