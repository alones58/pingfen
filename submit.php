﻿<?php
error_reporting(E_ALL^E_NOTICE);
include "connect.php";
include "class/comment.class.php";


$arr = array();
$validates = Comment::validate($arr);

if($validates)
{



	$ip = $_SERVER["REMOTE_ADDR"];
	mysql_query("	INSERT INTO comments(name,body,star,dt)
					VALUES (
						'".$arr['name']."',
						'".$arr['body']."',
						'".$arr['txtstar']."',
						'".date('Y-m-d H:i:s')."'
					)");
	$arr['id'] = mysql_insert_id();
	$arr = array_map('stripslashes',$arr);
	$insertedComment = new Comment($arr);
	echo json_encode(array('status'=>1,'html'=>$insertedComment->markup()));
}
else
{
	echo '{"status":0,"errors":'.json_encode($arr).'}';
}
?>