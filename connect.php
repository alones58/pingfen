<?php
header('Content-Type: text/html; charset=utf-8');
/* 数据库配置 */
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '123123a';
$db_database	= 'mytest'; 
$link = @mysql_connect($db_host,$db_user,$db_pass) or die('未知的数据库连接');
mysql_query("SET NAMES 'utf8'");
mysql_select_db($db_database,$link);
error_reporting(0);
?>