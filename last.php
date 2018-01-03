<?php
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



<div id="addCommentContainer">
 <?php $result = mysql_query("SELECT * FROM `huizong` WHERE `leibie` = '歌唱类' ORDER BY `fenshu` DESC");
       while( $row = mysql_fetch_array($result)){
		     echo "<font color=red>";
  echo $row[1]."&nbsp&nbsp"."<font  color=4c8200>".$row[4]."</font>"."分&nbsp&nbsp&nbsp&nbsp<br>";
  	   }

        ?>
</div>

</div>

</div>

<div id="main">


<div id="addCommentContainer">

<div><span><font color=4c8200><b>舞蹈类 得分列表</b></font><br>

</span>
</div>
</div>

<div id="addCommentContainer">


 <?php $result = mysql_query("SELECT * FROM `huizong` WHERE `leibie` = '舞蹈类' ORDER BY `fenshu` DESC");
while( $row = mysql_fetch_array($result)){
		     echo "<font color=red>";
  echo $row[1]."&nbsp&nbsp"."<font  color=4c8200>".$row[4]."</font>"."分&nbsp&nbsp&nbsp&nbsp<br>";
  	   }
 


        ?>

</div>

</div>

</div>

</div>


<div id="main">


<div id="addCommentContainer">

<div><span><font color=4c8200><b>其他类 得分列表</b></font><br>

</span>
</div>
</div>

<div id="addCommentContainer">



 <?php $result = mysql_query("SELECT * FROM `huizong` WHERE `leibie` = '其他类' ORDER BY `fenshu` DESC");

while( $row = mysql_fetch_array($result)){
		     echo "<font color=red>";
  echo $row[1]."&nbsp&nbsp"."<font  color=4c8200>".$row[4]."</font>"."分&nbsp&nbsp&nbsp&nbsp<br>";
  	   }
 


        ?>

</div>

</div>

</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>