<?php
/**
 * MyBB TuneUp
 * Copyright 2013 MyBB TuneUp Team. All Rights Reserved.
 * Plugin Version: 0.0.1
 * MyBB Compatibility: 1.6.0 ~ 1.6.10
 * Website: http://mybbtuneup.tk
 * Licence: http://mybbtuneup.tk/licence
 * File: MYBB_ADMIN_DIR."modules/tuneup/update.php"
 */

// SECURITY
if(!defined("IN_MYBB"))
{
	die("Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MYBB is defined.");
}

// BREADCRUMB
$page->add_breadcrumb_item("MyBB TuneUp", "index.php?module=tuneup");

// MYBB TUNEUP HOOK "admin_mybbtuneup_update_begin"
$plugins->run_hooks("admin_mybbtuneup_update_begin");

// TABS
$sub_tabs['update'] = array(
	'title'       => $lang->mybbtuneup_update,
	'link'        => "index.php?module=tuneup-update",
	'description' => $lang->mybbtuneup_update_description
);
$sub_tabs['version_check'] = array(
	'title'       => $lang->mybbtuneup_version_check,
	'link'        => "index.php?module=tuneup-update&amp;action=version_check",
	'description' => $lang->mybbtuneup_version_check_description
);

// UPDATE
if(!$mybb->input['action'])
{
	// MYBB TUNEUP HOOK "admin_mybbtuneup_update_start"
	$plugins->run_hooks("admin_mybbtuneup_update_start");
	// BREADCRUMB
	$page->add_breadcrumb_item($lang->mybbtuneup_update, "index.php?module=tuneup-update");
	// HEADER
	$page->output_header("MyBB TuneUp - ".$lang->mybbtuneup_update);
	// ACTIVE TAB
	$page->output_nav_tabs($sub_tabs, 'update');
}

// VERSION CHECK
if($mybb->input['action'] == "version_check")
{
	// MYBB TUNEUP HOOK "admin_mybbtuneup_version_check_start"
	$plugins->run_hooks("admin_mybbtuneup_version_check_start");
	// BREADCRUMB
	$page->add_breadcrumb_item($lang->mybbtuneup_version_check, "index.php?module=tuneup-update&amp;action=version_check");
	// HEADER
	$page->output_header("MyBB TuneUp - ".$lang->mybbtuneup_version_check);
	// ACTIVE TAB
	$page->output_nav_tabs($sub_tabs, 'version_check');
}

// FOOTER
$page->output_footer();

?>