<?php
/**
 * MyBB TuneUp
 * Copyright 2013 MyBB TuneUp Team. All Rights Reserved.
 * Plugin Version: 0.0.1
 * MyBB Compatibility: 1.6.0 ~ 1.6.10
 * Website: http://mybbtuneup.tk
 * Licence: http://mybbtuneup.tk/licence
 * File: MYBB_ADMIN_DIR."modules/tuneup/module_meta.php"
 */

// SECURITY
if(!defined("IN_MYBB"))
{
	die("Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MYBB is defined.");
}

// META
function tuneup_meta()
{
	global $page, $lang, $plugins;
	if(function_exists('tuneup_is_installed'))
	{
		$sub_menu = array();
		$sub_menu['10'] = array(
			"id"    => "welcome",
			"title" => $lang->tuneup_welcome,
			"link"  => "index.php?module=tuneup-welcome"
		);
		$sub_menu['20'] = array(
			"id"    => "settings",
			"title" => $lang->tuneup_settings,
			"link"  => "index.php?module=tuneup-settings"
		);
		$sub_menu['30'] = array(
			"id"    => "tools",
			"title" => $lang->tuneup_tools,
			"link"  => "index.php?module=tuneup-tools"
		);
		$sub_menu['40'] = array(
			"id"    => "update",
			"title" => $lang->tuneup_update,
			"link"  => "index.php?module=tuneup-update"
		);
		$sub_menu['50'] = array(
			"id"    => "about",
			"title" => $lang->tuneup_about,
			"link"  => "index.php?module=tuneup-about"
		);
		$sub_menu = $plugins->run_hooks("admin_tuneup_menu", $sub_menu);
		$page->add_menu_item("MyBB TuneUp", "tuneup", "index.php?module=tuneup", 1001, $sub_menu);
		return true;
	}
	else
	{
		return false;
	}
}

// ACTION HANDLER
function tuneup_action_handler($action)
{
	global $page, $lang, $plugins;
	$page->active_module = "tuneup";
	$actions = array(
			'welcome' => array(
			'active' => 'welcome',
			'file'   => 'welcome.php'
		),
			'settings' => array(
			'active' => 'settings',
			'file'   => 'settings.php'
		),
			'tools' => array(
			'active' => 'tools',
			'file'   => 'tools.php'
		),
			'update' => array(
			'active' => 'update',
			'file'   => 'update.php'
		),
			'about' => array(
			'active' => 'about',
			'file'   => 'about.php'
			)
		);
	$actions = $plugins->run_hooks("admin_tuneup_action_handler", $actions);
	if(isset($actions[$action]))
	{
		$page->active_action = $actions[$action]['active'];
		return $actions[$action]['file'];
	}
	else
	{
		$page->active_action = "welcome";
		return "welcome.php";
	}
}

?>