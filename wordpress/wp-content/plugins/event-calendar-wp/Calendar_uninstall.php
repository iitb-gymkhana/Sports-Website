<?php
	if ( ! defined( 'ABSPATH' ) ) exit;
	global $wpdb;

	$table_name  =  $wpdb->prefix . "calendar_manager";
	$table_name1 =  $wpdb->prefix . "calendar_settings";
	$table_name2 =  $wpdb->prefix . "add_an_event";
	$table_name3 =  $wpdb->prefix . "add_category";
	$table_name4 =  $wpdb->prefix . "calendar_other_parameters";
	$table_name5 =  $wpdb->prefix . "font_family";
	$table_name6 =  $wpdb->prefix . "widget_id";
	
	$sql  = "DROP TABLE IF EXISTS $table_name";
	$sql1 = "DROP TABLE IF EXISTS $table_name1";
	$sql2 = "DROP TABLE IF EXISTS $table_name2";
	$sql3 = "DROP TABLE IF EXISTS $table_name3";
	$sql4 = "DROP TABLE IF EXISTS $table_name4";
	$sql5 = "DROP table IF EXISTS $table_name5";
	$sql6 = "DROP table IF EXISTS $table_name6";

	$wpdb->query($sql);
	$wpdb->query($sql1);
	$wpdb->query($sql2);
	$wpdb->query($sql3);
	$wpdb->query($sql4);
	$wpdb->query($sql5);
	$wpdb->query($sql6);
?>