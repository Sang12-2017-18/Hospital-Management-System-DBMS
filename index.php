<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Login Page </title>
        <link rel="icon" type="image/png" href="LoginPage/images/icons/favicon.ico"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="LoginPage/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="LoginPage/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="LoginPage/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="LoginPage/vendor/animate/animate.css">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="LoginPage/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="LoginPage/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="LoginPage/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="LoginPage/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="LoginPage/css/util.css">
<link rel="stylesheet" type="text/css" href="LoginPage/css/main.css">
       
        <script type="text/javascript"> 
            function verifyPass()
            {
                var pass1=document.getElementById("passw").value;
                if(pass1==="php")
                    //document.getElementById("Login").action="./welcome.html";
                    window.location.href="./welcome.html";
            }
            </script>
    </head>
  <body topmargin="100px">
    <div class="limiter">
		<div class="container-login100" style="background-image: url('LoginPage/images/LoginPage.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
        <form id="Login" class="login100-form validate-form p-b-33 p-t-5">
            <!--
            <label> Username </label><br>
            <input type="text" value="admin">
            <br> 
            -->
            <div class="wrap-input100 validate-input" data-validate = "Enter username">
                <input class="input100" type="text" name="username" placeholder="User name" value="admin">
			<span class="focus-input100" data-placeholder="&#xe82a;"></span>
	    </div>
            <!--
            <label> Password </label> <br>
            <input id="pass" type="password">
            <br>
            -->
            <div class="wrap-input100 validate-input" data-validate="Enter password">
			<input id="passw" class="input100" type="password" name="pass" placeholder="Password">
			<span class="focus-input100" data-placeholder="&#xe80f;"></span>
	    </div>
            <!--
            <input type="button" value="Submit" onClick="verify()">
            --> 
            <div class="container-login100-form-btn m-t-32">
                <input class="login100-form-btn" type="button" value="Submit" onclick="verifyPass()">
	</div>
        </form> 
            
    </div>
   </div>
</div>

</body>
</html>
