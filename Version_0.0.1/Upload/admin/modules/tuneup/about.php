<?php
/**
 * MyBB TuneUp
 * Copyright 2013 MyBB TuneUp Team. All Rights Reserved.
 * Plugin Version: 0.0.1
 * MyBB Compatibility: 1.6.0 ~ 1.6.10
 * Website: http://mybbtuneup.tk
 * Licence: http://mybbtuneup.tk/licence
 * File: MYBB_ADMIN_DIR."modules/tuneup/about.php"
 */

// SECURITY
if(!defined("IN_MYBB"))
{
	die("Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MYBB is defined.");
}

// BREADCRUMB
$page->add_breadcrumb_item("MyBB TuneUp", "index.php?module=tuneup");

// MYBB TUNEUP HOOK "admin_mybbtuneup_about_begin"
$plugins->run_hooks("admin_mybbtuneup_about_begin");

// TABS
$sub_tabs['about_plugin'] = array(
	'title'       => $lang->mybbtuneup_plugin,
	'link'        => "index.php?module=tuneup-about",
	'description' => $lang->mybbtuneup_plugin_description
);
$sub_tabs['about_licence'] = array(
	'title'       => $lang->mybbtuneup_licence,
	'link'        => "index.php?module=tuneup-about&amp;action=licence",
	'description' => $lang->mybbtuneup_licence_description
);
$sub_tabs['about_translation'] = array(
	'title'       => $lang->mybbtuneup_translation,
	'link'        => "index.php?module=tuneup-about&amp;action=translation",
	'description' => $lang->mybbtuneup_translation_description
);
$sub_tabs['about_authors'] = array(
	'title'       => $lang->mybbtuneup_authors,
	'link'        => "index.php?module=tuneup-about&amp;action=authors",
	'description' => $lang->mybbtuneup_authors_description
);

// ABOUT PLUGIN
if(!$mybb->input['action'])
{
	// MYBB TUNEUP HOOK "admin_mybbtuneup_about_plugin_start"
	$plugins->run_hooks("admin_mybbtuneup_about_plugin_start");
	// BREADCRUMB
	$page->add_breadcrumb_item($lang->mybbtuneup_about_plugin, "index.php?module=tuneup-about");
	// HEADER
	$page->output_header("MyBB TuneUp - ".$lang->mybbtuneup_about_plugin);
	// ACTIVE TAB
	$page->output_nav_tabs($sub_tabs, 'about_plugin');
}

// ABOUT LICENCE
if($mybb->input['action'] == "licence")
{
	// MYBB TUNEUP HOOK "admin_mybbtuneup_about_authors_start"
	$plugins->run_hooks("admin_mybbtuneup_about_licence_start");
	// BREADCRUMB
	$page->add_breadcrumb_item($lang->mybbtuneup_about_licence, "index.php?module=tuneup-about&amp;action=licence");
	// HEADER
	$page->output_header("MyBB TuneUp - ".$lang->mybbtuneup_about_licence);
	// ACTIVE TAB
	$page->output_nav_tabs($sub_tabs, 'about_licence');
}

// ABOUT TRANSLATION
if($mybb->input['action'] == "translation")
{
	// MYBB TUNEUP HOOK "admin_mybbtuneup_about_translation_start"
	$plugins->run_hooks("admin_mybbtuneup_about_translation_start");
	// BREADCRUMB
	$page->add_breadcrumb_item($lang->mybbtuneup_about_translation, "index.php?module=tuneup-about&amp;action=translation");
	// HEADER
	$page->output_header("MyBB TuneUp - ".$lang->mybbtuneup_about_translation);
	// ACTIVE TAB
	$page->output_nav_tabs($sub_tabs, 'about_translation');
}

// ABOUT AUTHORS
if($mybb->input['action'] == "authors")
{
	// MYBB TUNEUP HOOK "admin_mybbtuneup_about_authors_start"
	$plugins->run_hooks("admin_mybbtuneup_about_authors_start");
	// BREADCRUMB
	$page->add_breadcrumb_item($lang->mybbtuneup_about_authors, "index.php?module=tuneup-about&amp;action=authors");
	// HEADER
	$page->output_header("MyBB TuneUp - ".$lang->mybbtuneup_about_authors);
	// ACTIVE TAB
	$page->output_nav_tabs($sub_tabs, 'about_authors');
}

// FOOTER
$page->output_footer();

?>