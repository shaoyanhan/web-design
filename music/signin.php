<body style="background-image: url(img/signin.png);background-repeat: no-repeat;background-size: cover;"></body>
<p style="margin-left: 44%;margin-top: 200px;font-size: 2em">用户注册页面</p>
<div style="margin-left: 38%;">
    
        
        <form action="signin_check.php" method="post">
            用户名：&nbsp;&nbsp;&nbsp;<input type="text" name="username" size="30px" id="username" /><br /><br />
            密码：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="passowrd" name="password" size="30px" id="password" /><br /><br />
            确认密码：<input type="passowrd" name="repassword" size="30px" id="repassword" /><br /><br />
            邮箱：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mail" size="30px" id="mail"  /><br /><br />
            验证码：&nbsp;&nbsp;&nbsp;<input type="text" name="authcode" size="30px" id="authcode" /><br /><br />
            验证码图片：<img  id="captcha_img" border="1" src="./captcha.php?r=<?php echo rand(); ?>" alt="" width="100" height="30"><a href="javascript:void(0)" onclick="document.getElementById('captcha_img').src='./captcha.php?r='+Math.random() ">&nbsp;&nbsp;&nbsp;看不清，换一个</a><br /><br />
            已有账号？<a href="login.php">去登录</a> <br /><br />
            <input type="submit" value="注册" style="width: 60px;height: 40px" />&nbsp;&nbsp;

            <input type="reset" value="重置"  style="width: 60px;height: 40px" />&nbsp;&nbsp;
            <input type="button" value="返回" onclick="javascript:location.href='index.php'" style="width: 60px;height: 40px" />
        </form>
    
</div>

