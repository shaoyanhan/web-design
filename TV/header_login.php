<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<title>
		<?php echo "shao's blog" ?>
	</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
</head>

<body>
<div id="top" style="background-image: url(img/header2.jpg);width: 100%;height: 120px;background-repeat: no-repeat;background-size: cover;" >
    <div style="margin-left: 0.5%;margin-top: 0.5%;float: left;"><p style=";text-align: left;font-size: 1.5em;" ><a href="../index_login.php" style="color: white">邵燕涵的音影安利博客</a></p></div>

    <nav>
        <div class="wrap" style="margin-top: 0;margin-right: 0.5%;float: right;">
            <ul class="level" >
                <li><a href="../index_login.php">首页</a></li>
                <li>
                    <a href="../movie/index_login.php">电影</a>
                    <ul class="two">
                        <li><a href="../movie/index_login.php">本期推荐</a></li>
                        <li><a href="../former_login.php">往期回顾</a></li>
                    </ul>
                </li>
                <li>
                    <a href="index_login.php">电视剧</a>
                    <ul class="two">
                        <li><a href="index_login.php">本期推荐</a></li>
                        <li><a href="../former_login.php">往期回顾</a></li>
                    </ul>
                </li>
                <li>
                    <a href="../music/index_login.php">音乐</a>
                    <ul class="two">
                        <li><a href="../music/index_login.php">本期推荐</a></li>
                        <li><a href="../former_login.php">往期回顾</a></li>
                    </ul>
                </li>
                <li>
                    <a href="http://www.weibo.com">
                    <img src="img/weibo.png" height="30px">
                  </a>
                </li>
                <li>
                    <a href="">About</a>
                    <ul class="two">
                        <li>待建设。。。</li>
                    </ul>
                </li>
                <li >
                    <?php
                    $link=mysqli_connect("127.0.0.1","root","123456") or die("数据库连接失败！");
                    mysqli_select_db($link,"test") or die("数据库choose失败！<BR/>");
                    mysqli_query($link,"set names UTF8");
                    $sql = "select * from nicheng";
                    $result=mysqli_query($link,$sql);
                    $row=mysqli_fetch_array($result);
                    $name=$row['name'];
                      ?>
                    <p style="color: white">Welcome! <?php echo $name; ?></p>
                </li>
                <li>
                    <a href="index.php">注销</a>
                </li>
            </ul>
        </div>
    </nav>
   
</div>
    