﻿<?php
include "connect.php";
include "class/comment.list.class.php";
include "class/page.class.php";
$tablename="comments";
$rows=mysql_query("SELECT * FROM `$tablename`");
while($res=mysql_fetch_row($rows)){$row[]=$res;}
$pageSize=20;
$total=count($row);
$_REQUEST['page']=$_REQUEST['page']==""?1:$_REQUEST['page'];
$comments = array();
$result = mysql_query("SELECT * FROM $tablename ORDER BY id ASC limit ".($_REQUEST['page']-1)*$pageSize.",".$pageSize."");
while($row = mysql_fetch_assoc($result))
{
	$comments[] = new Comment($row);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />

<title>获奖结果：</title>
<link rel="stylesheet" type="text/css" href="css/styles.list.css" />
<link rel="stylesheet" type="text/css" href="css/css.css" />
<link rel="stylesheet" type="text/css" href="css/star.css" />
<script src="js/star.js"></script>
</head>
<body>



<div id="main">


<div id="addCommentContainer">

<div><span><font color=4c8200><b>歌唱类 得分列表</b></font><br>

</span>
</div>
</div>

<div id="addCommentContainer">一等奖<br>
<font color=red>科技活动</font><br>

</div>
<div id="addCommentContainer">二等奖<br>
<font color=red>科技活动</font><br>
<font color=red>科技活动</font><br>

</div>
<div id="addCommentContainer">三等奖<br>
<font color=red>科技活动</font><br>
<font color=red>科技活动</font><br>
<font color=red>科技活动</font><br>

</div>


</div>



<div id="main">


<div id="addCommentContainer">

<div><span><font color=4c8200><b>其他类 得分列表</b></font><br>

</span>
</div>
</div>

<div id="addCommentContainer">一等奖<br>
<font color=red>科技活动</font><br>

</div>
<div id="addCommentContainer">二等奖<br>
<font color=red>科技活动</font><br>

</div>
<div id="addCommentContainer">三等奖<br>
<font color=red>科技活动</font><br>

</div>


</div>




<div id="main">


<div id="addCommentContainer">

<div><span><font color=4c8200><b>其他类 得分列表</b></font><br>

</span>
</div>
</div>

<div id="addCommentContainer">一等奖<br>
<font color=red>科技活动</font><br>

</div>
<div id="addCommentContainer">二等奖<br>
<font color=red>科技活动</font><br>

</div>
<div id="addCommentContainer">三等奖<br>
<font color=red>科技活动</font><br>

</div>


</div>


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>