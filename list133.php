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
//echo "系统当前时间戳为：";
//echo "";
//echo time();
//<!--JS 页面自动刷新 -->
echo ("<script type=\"text/javascript\">");
echo ("function fresh_page()");    
echo ("{");
echo ("window.location.reload();");
echo ("}"); 
echo ("setTimeout('fresh_page()',5000);");      
echo ("</script>");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<meta http-equiv="refresh" content="20">
<title>评委打分：</title>
<link rel="stylesheet" type="text/css" href="css/styles.list.css" />
<link rel="stylesheet" type="text/css" href="css/css.list.css" />
<link rel="stylesheet" type="text/css" href="css/star.css" />
<script src="js/star.js"></script>
</head>
<body>
<div id="main">

<div id="addCommentContainer"><img src="img/bg1.png" align="center"/></div>
<div id="addCommentContainer">

  <div><span>当前节目是：<br>	
<font color=red>百家笑谈 麻豆</font><br>
表演者：<br><font color=red>徐征超 宋洪雪 高华 钟晨雪 吴 琳</font>
</span>
<br/></div>
</div>
 <?php $result = mysql_query("SELECT * FROM comments WHERE name='百家笑谈 麻豆'");
	   $count=mysql_num_rows($result);


?>
<div id="addCommentContainer">评委打分：  （<?php echo $count; ?>位评委已打分。）<br>



 <?php $result = mysql_query("SELECT * FROM comments WHERE name='百家笑谈 麻豆'");
         while($row = mysql_fetch_array($result))
  {

  echo "<font color=red>";
 
  $defen = $row['star'];
  echo $defen;
  echo "分&nbsp";


  }

$zongfen = mysql_query("SELECT avg(star) as 平均分 FROM comments WHERE name='百家笑谈 麻豆");
$rs = mysql_fetch_assoc($zongfen);
echo '<br>'.平均分.'&nbsp '.'<font size=33 color=4c8200>'.round($rs['平均分'],2).分.'</font>';
$xiaoshu = round($rs['平均分'],2);
$sql = "update huizong SET fenshu='$xiaoshu' WHERE name='百家笑谈 麻豆'";
 $result = mysql_query($sql);

      if ($result) {  
 echo "Record updated successfully";  
}else{  
echo "Could not update record: ". mysqli_error($conn); }

        ?>
<a href=list2.php>下一个节目</a>
</div>
</div>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>