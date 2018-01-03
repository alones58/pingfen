<?php
include "connect.php";
include "class/comment.class.php";
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
<title>打</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<link rel="stylesheet" type="text/css" href="css/css.css" />
<link rel="stylesheet" type="text/css" href="css/star.css" />
<script src="js/star.js"></script>
</head>
<body>
<div id="main">
<div id="addCommentContainer"><img src="img/logo.png" align="center"/></div>
<div id="addCommentContainer">


  <div><span>当前节目是：<br>	
<font color=red>歌唱祖国</font><br>
表演者：<br><font color=red>后勤保障部</font>
</span>
<br/></div>
<div id="star">

    <div align="center"><span>  请点击星星打分：</span><br><br>
    </div>
    <ul>
        <li style="margin:15px"><a href="javascript:;">1</a></li>
        <li style="margin:15px"><a href="javascript:;">2</a></li>
        <li style="margin:15px"><a href="javascript:;">3</a></li>
        <li style="margin:15px"><a href="javascript:;">4</a></li>
        <li style="margin:15px"><a href="javascript:;">5</a></li>
    </ul>
    <span></span>
    <p></p>
</div>
<br/>
	<form id="addCommentForm" method="post" action="">
    	<div><br><br>
		 <table width="80%" border="0">
		
		  <tr>
			<td width="64%"><input type="hidden" name="name" id="name" value="歌唱祖国" /></td>

		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td><label for="body"></label></td>

			<td><input type="hidden" name="body" id="body" value="后勤保障部" /></td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td><div style="display:none"><label for="txtstar"></label><input type="text" name="txtstar" id="txtstar" /></div></td>
			<td>  <input type="submit" id="submit" value="提交评分"   style="width:300px;height:100px;font-size:50px"/></td>
		  </tr>
		</table>
        </div>
    </form>
</div>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/9.js"></script>
</body>
</html>
