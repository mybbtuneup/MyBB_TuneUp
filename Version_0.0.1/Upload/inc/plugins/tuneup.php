<?php
/**
 * MyBB TuneUp
 * Copyright 2013 MyBB TuneUp Team. All Rights Reserved.
 * Plugin Version: 0.0.1
 * MyBB Compatibility: 1.6.0 ~ 1.6.10
 * Website: http://mybbtuneup.tk
 * Licence: http://mybbtuneup.tk/licence
 * File: MYBB_ROOT."inc/plugins/tuneup.php"
 */

// SECURITY
if(!defined("IN_MYBB"))
{
	die("Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MYBB is defined.");
}

// INFO
function tuneup_info()
{
	global $lang;
	$lang->load("tuneup_plugin", false, true);
	return array(
		"name"          => "MyBB TuneUp",
		"description"   => $lang->tuneup_desc,
		"website"       => "http://mybbtuneup.tk",
		"author"        => "MyBB TuneUp Team",
		"authorsite"    => "http://mybbtuneup.tk/team",
		"version"       => "0.0.1",
		"guid"          => "",
		"compatibility" => "16*"
	);
}

// IS INSTALLED
function tuneup_is_installed()
{
	global $db;
	if($db->table_exists("tuneup"))
	{
		return true;
	}
	else
	{
		return false;
	}
}

// INSTALL
function tuneup_install()
{
	global $db;
	if(!$db->table_exists("tuneup"))
    {
		$collation = $db->build_create_table_collation();
		$db->write_query("CREATE TABLE `".TABLE_PREFIX."tuneup` (
			`tuid` int(10) UNSIGNED NOT NULL auto_increment,
			`tuneup_version` varchar(10) NOT NULL default '0',
			`tuneup_code_version` mediumint(8) UNSIGNED NOT NULL default '0',
			`mybb_version` varchar(10) NOT NULL default '0',
			`mybb_code_version` mediumint(8) UNSIGNED NOT NULL default '0',
			`min_version` varchar(10) NOT NULL default '0',
			`min_code_version` mediumint(8) UNSIGNED NOT NULL default '0',
			`max_version` varchar(10) NOT NULL default '0',
			`max_code_version` mediumint(8) UNSIGNED NOT NULL default '0',
			`date` bigint(20) UNSIGNED NOT NULL default '0',
			`status` tinyint(1) NOT NULL default '0',
			PRIMARY KEY (`tuid`)
		) ENGINE=MyISAM{$collation}");
		$insert = array(
			"tuneup_version"      => "0.0.1",
			"tuneup_code_version" => "1",
			"mybb_version"        => "1.6.9",
			"mybb_code_version"   => "1609",
			"min_version"         => "1.6.0",
			"min_code_version"    => "1600",
			"max_version"         => "1.6.9",
			"max_code_version"    => "1609",
			"date"                => TIME_NOW,
			"status"              => "1"
		);
		$db->insert_query("tuneup", $insert);
	}
}

// ACTIVATE
function tuneup_activate()
{
}

// DEACTIVATE
function tuneup_deactivate()
{
}

// UNINSTALL
function tuneup_uninstall()
{
	global $db;
	if($db->table_exists("tuneup"))
	{
		$db->drop_table("tuneup");
	}
}

?>