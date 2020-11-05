
<?php

//header("Content-Type: text/html; charset=utf8");
session_start();

if (! isset($_SESSION['name'])) {
    
        $username=$_POST['username'];
        $password=$_POST['password'];
        $repassword=$_POST['repassword'];
        $mail=$_POST['mail'];
        $authcode=$_POST['authcode'];
        
    if ($username=="" || $password==""|| $repassword==""|| $mail=="" || $authcode=="") {
            echo "<script>alert('信息填写不完整！');history.go(-1);</script>";
            die();
    }
}

if ($password!=$repassword) {
    echo '<script>alert("两次输入密码不一致！");history.go(-1);</script>';
   die();
}
if (!filter_var($mail,FILTER_VALIDATE_EMAIL)) {
    echo '<script>alert("邮箱格式不正确!");history.go(-1);</script>';
   die();
}
if (strtolower($_REQUEST['authcode']) != $_SESSION['authcode']) {
            echo "<script>alert('验证码错误！');history.go(-1);</script>";
            die();
        }


$link=mysqli_connect("127.0.0.1","root","123456") or die("数据库连接失败！");
mysqli_select_db($link,"test") or die("数据库choose失败！<BR/>");
mysqli_query($link,"set names UTF8");
$sql = "select * from users where username = '$username'";
    $result = mysqli_query($link,$sql);//执行sql
    $row=mysqli_fetch_array($result);
    if (mysqli_num_rows($result)==1) {
        
        echo '<script>alert("该用户名已存在！");history.go(-1);</script>';
        die();
        # code...
    }

    $sql="insert into users (username,password,mail)
    values ('$username','$password','$mail')";
$result=mysqli_query($link,$sql);
    if (!$result) {
    echo "Error:".mysqli_error($link);
    # code...
}else{
        $sql="DELETE FROM nicheng WHERE 1";
        mysqli_query($link,$sql);
        $sql="INSERT INTO nicheng(name) VALUES ('$username')";
        mysqli_query($link,$sql);
    echo '<script>alert("注册成功！");window.location.href="index_login.php";</script>';
}

    mysqli_close($link);//关闭数据库
?>

