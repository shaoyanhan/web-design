
<?php

//header("Content-Type: text/html; charset=utf8");
session_start();

if (! isset($_SESSION['name'])) {
    
        $username=$_POST['username'];
        $password=$_POST['password'];
        $authcode=$_POST['authcode'];
        
    if ($username=="" || $password=="" || $authcode=="") {
            echo "<script>alert('账户、密码和验证码不能为空！');history.go(-1);</script>";
            die();
    }
}
if (strtolower($_REQUEST['authcode']) != $_SESSION['authcode']) {
            echo "<script>alert('验证码错误！');history.go(-1);</script>";
            die();
        }


$link=mysqli_connect("127.0.0.1","root","123456") or die("数据库连接失败！");
mysqli_select_db($link,"test") or die("数据库choose失败！<BR/>");
mysqli_query($link,"set names UTF8");


    $sql = "select * from users where username = '$username' and password='$password'";
    $result = mysqli_query($link,$sql);//执行sql
    $row=mysqli_fetch_array($result);
    if (mysqli_num_rows($result)==1) {
        $_SESSION['username']=$row['username'];
        $sql="DELETE FROM nicheng WHERE 1";
        mysqli_query($link,$sql);
        $sql="INSERT INTO nicheng(name) VALUES ('$username')";
        mysqli_query($link,$sql);
        echo $_SESSION['username'];
        echo '<script>alert("登陆成功！");window.location.href="index_login.php"</script>';
        # code...
    }
    else{
        echo '<script>alert("用户名或密码错误，请重新输入！");history.go(-1);</script>';
    }

 

    mysqli_close($link);//关闭数据库
?>

