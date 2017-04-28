<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>本科招生网站</title>
<link rel="stylesheet" type="text/css" href="../styles/style.css">
</link>
<link rel="stylesheet" type="text/css" href="../js/bootstrap.css">
</link>
<script src="../js/jquery-1.10.2.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $(".link").hover(function(){
    $(this).find(".menu").fadeToggle();  
  });
});
/****************时间自动更新**********************************/
var timer = document.getElementById('curtime'),
    clockstart = document.getElementById('start'),
	clockstop = document.getElementById('stop'),
	running;
function updateTime() {
	var now = new Date(),
	    hours = now.getHours(),
		mins = now.getMinutes(),
		secs = now.getSeconds();
	hours = hours < 10 ? '0' + hours : hours;
	mins = mins < 10 ? '0' + mins : mins;
	secs = secs < 10 ? '0' + secs : secs;
	timer.innerHTML = hours + ':' + mins + ':' + secs;
}
function startClock() {
	updateTime();
	running = setInterval(updateTime, 1000);
}
function stopClock() {
	clearInterval(running);
}
startClock();
clockstart.addEventListener('click', startClock, false);
clockstop.addEventListener('click', stopClock, false);
</script>
</head>
<body>
<div id="site">
  <div id="top">
    <div id="search">
      <div id ="p1">
        <?php 
		 date_default_timezone_set("Asia/Shanghai");
		 echo date('l');
		 echo"&nbsp;&nbsp;&nbsp;";
		 echo date("Y/m/d");?>
      </div>
      <div id="p2"><a href="http://www.hdu.edu.cn" target="_blank">杭电官网</a> </div>
    </div>
    <div id="logo"> <img src="../image/logo.jpg"></img> </div>
    <div id="lead">
      <ul class="guide">
        <li class="index hover"><a href="../index.php">首页</a></li>
        <li class="link"><a href="#">学校介绍</a>
          <ul style="display: none;" class="menu">
            <li><a class="" href="../introduction/introduction.show.php">学校概况</a></li>
            <li><a href="../introduction/resources.list.php">师资力量</a></li>
            <li><a href="../introduction/competition.show.php">学科竞赛</a></li>
            <li><a href="../introduction/employment.show.php">就业情况</a></li>
            <li><a href="../introduction/schoolfellow.show.php">优秀校友</a></li>
          </ul>
        </li>
        <li class="link"><a href='#'>院系纵览</a>
          <ul style="display: none;" class='menu'>
            <li><a href='../department/dshow1.php'>计算机学院</a></li>
            <li><a href='../department/dshow2.php'>数字媒体与艺术设计学院</a></li>
            <li><a href='../department/dshow3.php'>会计学院</a></li>
            <li><a href='../department/dshow4.php'>外国语学院</a></li>
            <li><a href='../department/dshow5.php'>卓越学院</a></li>
            <li><a href='../department/dshow6.php'>电子信息工程</a></li>
            <li><a href='../department/dshow7.php'>通信工程学院</a></li>
            <li><a href='../department/dshow8.php'>软件工程学院</a></li>
            <li><a href='../department/dshow9.php'>机械工程学院</a></li>
            <li><a href='../department/dshow10.php'>人文与法学院</a></li>
          </ul>
        </li>
        <li  class="link"><a href='#'>报考指南</a>
          <ul style="display: none;" class='menu'>
            <li><a href='../register/policy.show.php'>招生政策</a></li>
            <li><a href='../register/column.show.php'>报考专栏</a></li>
            <li><a href='../register/plan.show.php'>招生计划</a></li>
            <li><a href='../register/entrance.show.php'>普通高考</a></li>
            <li><a href='../register/overyears.show.php'>历年录取</a></li>
          </ul>
        </li>
        <li  class="link"><a href='#'>招考动态</a>
          <ul style="display: none;"class='menu'>
            <li><a href='news.show.php'>招生快讯</a></li>
            <li><a href='information.show.php'>重要资讯</a></li>
            <li><a href='report.show.php'>媒体报道</a></li>
            <li><a href='admission.show.php'>录取查询</a></li>
          </ul>
        </li>
        <li  class="link"><a href='#'>校园生活</a>
          <ul style="display: none;" class='menu'>
            <li><a href="../campus/schoollife.show.php">杭电生活</a></li>
            <li><a href='../campus/schoollife.show.php'>校园地图</a></li>
            <li><a href='../campus/schoollife.show.php'>杭电家园</a></li>
          </ul>
        </li>
      </ul>
    </div>
    </ul>
  </div>
  <div id="content">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active"> <img src="../image/i1.jpg" alt="1">
          <div class="carousel-caption"> </div>
        </div>
        <div class="item"> <img src="../image/i2.jpg" alt="2">
          <div class="carousel-caption"> </div>
        </div>
        <div class="item"> <img src="../image/i3.jpg" alt="3">
          <div class="carousel-caption"> </div>
        </div>
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
    <div id="Licon">
      <div class="left"> <img src="../image/cont1.jpg">
        <ul>
          <li><a href='news.show.php'>招生快讯</a></li>
          <li><a href='information.show.php'>重要资讯</a></li>
          <li><a href='report.show.php'>媒体报道</a></li>
          <li><a href='admission.show.php'>录取查询</a></li>
        </ul>
      </div>
      <div class="right">
        <p class="location"> 当前位置： <span> <a href='../index.php'>首页</a>- <a href='#'>招考动态</a>- <a href='admission.show.done.handle.php'>录取查询</a> </span> </p>
        <div class="content">
		<?php
	require_once '../article/connect.php';
	
    //require_once 'loginservice.class.php';
	$id = $_GET['id'];
	
	$sql="select * from candidate where id= '$id'";
	$res = mysqli_query($con,$sql);
	$res1  = mysqli_query($con,$sql);
	$row1=mysqli_fetch_assoc($res)
?>	
		<div align="center" style="height:400px;background-color:#D3EAF7">
		<div align="center"><strong><font color="#990000">姓名：<?php echo $row1['id'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp 考生号：<?php echo $row1['password'];?></font></strong></div>
		<hr align="center" size="1" width="95%">

<table border='1px' bordercolor='black'  cellspacing='0px'  width='500px' style="margin:20px;">
<!-- 表格头部 -->
<tr>
<td><font size='1' color='red'>科目名称:</font></td><td><font size='1' color='red'>成绩:</font></td>
</tr>
<?php
//每循环一次，取一行数据记录显示在一行中
while($row=mysqli_fetch_assoc($res)){
?>
<tr>
<td><?php echo $row['course name'];?></td><td><?php echo $row['grade'];?></td>
</tr>
<?php
}    
?>
</table>
<p></p>
<table border='1px' bordercolor='black'  cellspacing='0px'  width='500px'>
<!-- 表格头部 -->

<?php
//每循环一次，取一行数据记录显示在一行中
$row1=mysqli_fetch_assoc($res1);
?>
<tr>
<td><?php echo "<font size='1' color='red'>省市:</font>";echo $row1['province'];?></td><td><?php echo "<font size='1' color='red'>批次:</font>";echo $row1['batch'];?></td><td><?php echo "<font size='1' color='red'>录取状态:</font>";echo $row1['admission'];?></td>
</tr>
</table>
 <div style="width:100px; height:30px;margin:20px;background-color:#3399CC"><a style="display:block;height:100%;width:100%" href="admission.show.php"><font color="#FFFFFF" style="font-weight:bold;">返回</font></a></div>
			</div>
			
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfloat" style="clear:both"></div>
</div>
<div class="footer">
  <div class="contact">
    <div class="fleft"> <img src="../image/ft0.jpg"/>
      <p>咨询电话：0571-86915007 / 地址：杭州下沙高教园区二号大街 / 邮编：310018 Email:zhaosheng@hdu.edu.cn</p>
    </div>
    <div class="fright">
      <div class="rTop"> <a href="http://t.qq.com/hdu_zs" target="_blank"><img src="../image/ft1.jpg"></a> <img src="../image/ft2.jpg"/> <img src="../image/ft3.jpg"/> </div>
      <div class="rBottom">
        <ul>
          <li class='link_title'>连线我们</li>
          <li><a href='#'>学校官方微信</a></li>
          <li><a href='#'>招生官方微信</a></li>
          <li><a href='#'>腾讯微博在线</a></li>
          <li><a href='#'>手机版招生网</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="bottom">
    <p>copyright&copy;
      <?php include '../copyright.php';?>
      Ren Jun Site For All</p>
  </div>
</div>
</body>
</html>
