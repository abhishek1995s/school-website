<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html>
<head>
 <title> Gvhss Cherpulassery</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Unique Login Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files  -->
<link href='//fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<!-- /font files  -->
<!-- css files -->
<link href="css/style1.css" rel='stylesheet' type='text/css' media="all" />
<link href="css/style11.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css files -->
</head>
<body>
<h1>LOGIN OR SIGN Up</h1>
<div class="log">
	<div class="content1">
		<h2>Login Form</h2>
                <form method="post" action="studentlogin.php">
			<input type="text" name="email" id="email" value="EMAIL" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'USERNAME';}">
			<input type="password" name="password" id="password" value="PASSWORD" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD';}">
			<div class="button-row">
				<input type="submit" class="sign-in" value="Login">
                                  <a id="modalr" href="#modal" class="reset" > Forgot</a>
				
			</div>
		</form>
	</div>
    
    
    <div class="container">
       

	<div id="modal" class="popupContainer" style="display:none;">
		<header class="popupHeader">
			Forgot Password
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</header>
		
		<section class="popupBody">
			<!-- Social Login -->
			

			<!-- Username & Password Login form -->
			

			<!-- Register Form -->
			<div class="user_register">
                            
                            <form  id="form1" method="post" action="popupaction.php">
					

					<label>YOUR PASSWORD WILL BE SEND TO YOUR EMAIL ADDRESS</label>
					<input type="email" name="femail" id="femail" placeholder="ENTER YOUR EMAIL ADDRESS">
					<br />

					

					

					<div class="action_btns">
						<div class="one_half"><a href="temp.php" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
						<div class="one_half last"><a href="#" onclick="document.getElementById('form1').submit()" class="btn btn_red">Submit</a></div>
					</div>
				</form>
			</div>
		</section>
	</div>
</div>

<script type="text/javascript">
	$("#modalr").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		

		// Calling Register Form
		
			$(".social_login").hide();
			$(".user_register").show();
			$(".header_title").text('Forgot Password');
			return false;
		

		// Going back to Social Forms
		

	})
</script>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
	<div class="content2">
		<h2>Sign Up Form</h2>
                <form method="post" action="studentsignup.php">
			<input type="text" name="name" id="name" value="NAME" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'NAME ';}">
                   
                        
                        
                       
                        <input type="select" list="branch"  name="branch" value="BRANCH"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'BRANCH';}"><br>
                          
                        <datalist id="branch"  >
                                    
                            
                              <option   value="A&T"  ></option>
                              <option value="CRM"></option>
                                 <option value="MLT(A)"></option>
                                    <option value="MLT(B)"></option>
                            
                      </datalist>    
                         <input type="select" list="year"  name="year"  value="YEAR"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'YEAR';}">
                        <datalist id="year"  >
                                    
                            
                              <option   value="1"  ></option>
                              <option value="2"></option>
                            
                      </datalist>      
                        <input type="text" name="rollno" id="rollno" value="ROLLNO" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'ROLLNO';}">    
                        <input type="tel" name="mobileno" value="PHONE" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PHONE';}"><br>
                        
                        
			<input type="email" name="email" id="email" value="EMAIL ADDRESS" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'EMAIL ADDRESS';}">
			<input type="password" name="password" id="password" value="PASSWORD" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD';}">
                        <input type="password" name="cpassword" id="cpassword"  value="CONFIRM PASSWORD" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD';}">
			<input type="submit" class="register" value="Sign Up">
		</form>
	</div>
	<div class="clear"></div>
</div>
<div class="footer">
	<p></p>
</div>

</body>
</html>