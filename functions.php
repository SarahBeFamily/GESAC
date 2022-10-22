<?php
/**
 * Retrieve template section
 *
 * @param [string] $section
 * @return void
 */
function include_section($section, $id = null, $title = null, $var = null) {
	include 'templates/sections/'.$section.'.php';
}

/**
 * Retrieve page template content
 *
 * @param [string] $section
 * @return void
 */
function include_content_page($page) {
	if ($page == '') {
		include 'templates/homepage.php';
	} else {
		include 'templates/'.$page.'.php';
	}
}

/**
 * Retrieve image from absolute path
 *
 * @param [string] $img
 * @return void
 */
function img_path($img) {
	$base_url = strpos($_SERVER['HTTP_HOST'], 'localhost') !== false ? 'http://localhost/gesac' : 'http://'.$_SERVER['HTTP_HOST'];
	return $base_url .'/assets/img/'.$img;
}

/**
 * Retrieve component with changing of variables if needed
 *
 * @param [type] $el
 * @param [type] $var
 * @param boolean $include
 * @return void
 */
function get_component($el, $var, $include = true) {
	include 'templates/components/'.$el.'.php';
}