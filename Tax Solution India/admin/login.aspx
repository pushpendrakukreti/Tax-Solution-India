<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="login.aspx.cs" Inherits="TaxSolutionOnline.admin.login" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="UTF-8" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
    
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/mithlesh_animation.css" />
    <style>
        .input {
            padding: 10px;
            border: 1px solid #999999;
            width: 100%;
            border: 1px solid #e5e5e5;
            background: rgba(154, 147, 147, 0.14);
            //box-shadow: inset 1px 1px 2px rgba(228, 206, 206, 0.2);
            border-radius: 3px;
            box-shadow: rgba(200,200,200,0.7) 0 4px 10px -1px;
        }
    </style>
    <script>
	function CheckFormValidation(){
	if(document.form1.username.value==''){
	alert('Username field can not be blank!');
	document.form1.username.focus();
	return false;
	}
	if(document.form1.password.value==''){
	alert('Password field can not be blank!');
	document.form1.password.focus();
	return false;
	}
	else{
	return true;
	}
	}
    </script>
    <!--**************Clock display****************---->
    <script>
function startTime() {
    var today=new Date();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML = h+":"+m+":"+s;
    var t = setTimeout(function(){startTime()},500);
}

function checkTime(i) {
    if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
    </script>
    <meta charset="UTF-8" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <title>Login | Admin</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/mithlesh_animation.css" />
    <style>
        .input {
            padding: 10px;
            border: 1px solid #999999;
            width: 100%;
            border: 1px solid #e5e5e5;
            background: rgba(154, 147, 147, 0.14);
            //box-shadow: inset 1px 1px 2px rgba(228, 206, 206, 0.2);
            border-radius: 3px;
            box-shadow: rgba(200,200,200,0.7) 0 4px 10px -1px;
        }
    </style>
    <script>
	function CheckFormValidation(){
	if(document.form1.username.value==''){
	alert('Username field can not be blank!');
	document.form1.username.focus();
	return false;
	}
	if(document.form1.password.value==''){
	alert('Password field can not be blank!');
	document.form1.password.focus();
	return false;
	}
	else{
	return true;
	}
	}
    </script>
    <!--**************Clock display****************---->
    <script>
function startTime() {
    var today=new Date();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML = h+":"+m+":"+s;
    var t = setTimeout(function(){startTime()},500);
}

function checkTime(i) {
    if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
    </script>
</head>
<body>
    <form id="form1" runat="server">
        <div>
            <br />
            <h1 align="center">Welcome to <a href="../index.aspx"><font color="#20951D">Tax Solution Online </font></a>Login</h1>
            <div id="txt" align="center" style="font-size: 45px;"></div>

            <div class="form-box" style="background: #fff; color: #444; margin: 80px auto 0 auto; border: 1px solid #e5e5e5; box-shadow: rgba(200,200,200,0.7) 0 4px 10px -1px;" id="login-box">
                <div class="header">
                    <img src="img/avatar.png" class="animated infinite bounce" style="border-radius: 100%; height: 100px; width: 100px; margin-top: -47px;">
                </div>
                <div class="body">
                    <div class="form-group">
                        <input type="text" name="username" id="username" class="input" placeholder="Enter User Name" />
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="pass" class="input" placeholder="Enter Password" />
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember_me" />
                        Remember me
                    </div>
                </div>
                <div class="footer">
                    <input type="submit" name="submit" class="button button-primary" value="Log In" onclick="return CheckFormValidation();" />


                </div>
                </form>
            </div>
            <!-- jQuery 2.0.2 -->
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
            <!-- Bootstrap -->
            <script src="js/bootstrap.min.js" type="text/javascript"></script>
        </div>
    </form>
</body>
</html>
