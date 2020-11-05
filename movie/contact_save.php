<?php 
$link=mysqli_connect("127.0.0.1","root","123456") or die("数据库连接失败！");
mysqli_select_db($link,"test") or die("数据库choose失败！<BR/>");
mysqli_query($link,"set names UTF8");
$sql = "SELECT * FROM nicheng WHERE 1";
    $result = mysqli_query($link,$sql);//执行sql
    $row=mysqli_fetch_array($result);
    $username=$row['name'];
$sql = "select * from users where username = '$username'";
$result = mysqli_query($link,$sql);//执行sql
    $row=mysqli_fetch_array($result);
   $mail=$row['mail'];
$content=$_POST['content'];
$sub_date=date('Y-m-d H:i:s');

if($_POST['content']==""){
	echo '<script>alert("请输入内容！");history.go(-1);</script>';
	die();
}

$content=htmlspecialchars($content);

$link=mysqli_connect("127.0.0.1","root","123456") or die("数据库连接失败！");
mysqli_select_db($link,"test") or die("数据库choose失败！<BR/>");
mysqli_query($link,"set names UTF8");
$sql="insert into movie_message1 (username,mail,content,sub_date)
	values ('$username','$mail','$content','$sub_date')";
$result=mysqli_query($link,$sql);

if (!$result) {
	echo "Error:".mysqli_error($link);
	# code...
}else{
	echo '<script>alert("评论成功！");window.location.href="index_login.php#bottom";</script>';
}

mysqli_close($link);//关闭数据库
//header("refresh:0;url=http://localhost:8080/dashboard/myweb/movie");

 ?>
