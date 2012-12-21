<?php
/**
 * MyBB TuneUp
 * Copyright 2013 MyBB TuneUp Team. All Rights Reserved.
 * Plugin Version: 0.0.1
 * MyBB Compatibility: 1.6.0 ~ 1.6.10
 * Website: http://mybbtuneup.tk
 * Licence: http://mybbtuneup.tk/licence
 * File: MYBB_ADMIN_DIR."modules/tuneup/welcome.php"
 */

// SECURITY
if(!defined("IN_MYBB"))
{
	die("Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MYBB is defined.");
}

// MYBB TUNEUP HOOK "admin_mybbtuneup_welcome_begin"
$plugins->run_hooks("admin_mybbtuneup_welcome_begin");

// TABS
$sub_tabs['welcome'] = array(
	'title'       => $lang->mybbtuneup_welcome,
	'link'        => "index.php?module=tuneup-welcome",
	'description' => $lang->mybbtuneup_welcome_description
);
$sub_tabs['features'] = array(
	'title'       => $lang->mybbtuneup_features,
	'link'        => "index.php?module=tuneup-welcome&amp;action=features",
	'description' => $lang->mybbtuneup_features_description
);
$sub_tabs['news'] = array(
	'title'       => $lang->mybbtuneup_news,
	'link'        => "index.php?module=tuneup-welcome&amp;action=news",
	'description' => $lang->mybbtuneup_news_description
);
$sub_tabs['ideas'] = array(
	'title'       => $lang->mybbtuneup_ideas,
	'link'        => "index.php?module=tuneup-welcome&amp;action=ideas",
	'description' => $lang->mybbtuneup_ideas_description
);
$sub_tabs['support'] = array(
	'title'       => $lang->mybbtuneup_support,
	'link'        => "index.php?module=tuneup-welcome&amp;action=support",
	'description' => $lang->mybbtuneup_support_description
);

// WELCOME
if(!$mybb->input['action'])
{
	// MYBB TUNEUP HOOK "admin_mybbtuneup_welcome_start"
	$plugins->run_hooks("admin_mybbtuneup_welcome_start");
	// BREADCRUMB
	$page->add_breadcrumb_item("MyBB TuneUp", "index.php?module=tuneup");
	// HEADER
	$page->output_header("MyBB TuneUp - ".$lang->tuneup_welcome);
	// ACTIVE TAB
	$page->output_nav_tabs($sub_tabs, 'welcome');
}

// FEATURES
if($mybb->input['action'] == "features")
{
	// MYBB TUNEUP HOOK "admin_mybbtuneup_features_start"
	$plugins->run_hooks("admin_mybbtuneup_features_start");
	// BREADCRUMBS
	$page->add_breadcrumb_item("MyBB TuneUp", "index.php?module=tuneup");
	$page->add_breadcrumb_item($lang->mybbtuneup_features, "index.php?module=tuneup-welcome&amp;action=features");
	// HEADER
	$page->output_header("MyBB TuneUp - ".$lang->mybbtuneup_features);
	// ACTIVE TAB
	$page->output_nav_tabs($sub_tabs, 'features');
}

// NEWS
if($mybb->input['action'] == "news")
{
	// MYBB TUNEUP HOOK "admin_mybbtuneup_news_start"
	$plugins->run_hooks("admin_mybbtuneup_news_start");
	// BREADCRUMBS
	$page->add_breadcrumb_item("MyBB TuneUp", "index.php?module=tuneup");
	$page->add_breadcrumb_item($lang->mybbtuneup_news, "index.php?module=tuneup-welcome&amp;action=news");
	// HEADER
	$page->output_header("MyBB TuneUp - ".$lang->mybbtuneup_news);
	// ACTIVE TAB
	$page->output_nav_tabs($sub_tabs, 'news');
}

// IDEAS
if($mybb->input['action'] == "ideas")
{
	// MYBB TUNEUP HOOK "admin_mybbtuneup_ideas_start"
	$plugins->run_hooks("admin_mybbtuneup_ideas_start");
	// BREADCRUMBS
	$page->add_breadcrumb_item("MyBB TuneUp", "index.php?module=tuneup");
	$page->add_breadcrumb_item($lang->mybbtuneup_ideas, "index.php?module=tuneup-welcome&amp;action=ideas");
	// HEADER
	$page->output_header("MyBB TuneUp - ".$lang->mybbtuneup_ideas);
	// ACTIVE TAB
	$page->output_nav_tabs($sub_tabs, 'ideas');
}

// SUPPORT
if($mybb->input['action'] == "support")
{
	// MYBB TUNEUP HOOK "admin_mybbtuneup_support_start"
	$plugins->run_hooks("admin_mybbtuneup_support_start");
	// BREADCRUMBS
	$page->add_breadcrumb_item("MyBB TuneUp", "index.php?module=tuneup");
	$page->add_breadcrumb_item($lang->mybbtuneup_support, "index.php?module=tuneup-welcome&amp;action=support");
	// HEADER
	$page->output_header("MyBB TuneUp - ".$lang->mybbtuneup_support);
	// ACTIVE TAB
	$page->output_nav_tabs($sub_tabs, 'support');
}

// FOOTER
$page->output_footer();

?>