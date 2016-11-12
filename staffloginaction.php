<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
	<head>
		 <title> Gvhss Cherpulassery</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
		<script src="js/jquery.js" type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	</head>
		<body>
                    <?php 
                    
                     $st=$_SESSION["staffs"];
                     if($st==="rrrr")
                     {
                         
                     
                    
                    
                    
                    ?>
			<!----start-body------->
			<!----star-wrapper-demo------->
			<div class="wrapper-demo">
				<!-----start-wrapper-dropdown-2---->
					<div id="dd" class="wrapper-dropdown-2" tabindex="1">STAFF ACTION<span><img src="images/menu.png"/></span>
							<ul class="dropdown">
							                <li> <a href="viewstaffmessage.php">View messages<span class="icon signout"> </span></a></li>
         
									<li> <a href="addstudentlist.php">Add Student List<span class="icon signout"> </span></a></li>
									<li><a href="addmarklist.php">Add Marklist<span class="icon signout"> </span></a></li>
									<li><a href="stafflogout.php">Logout</a></li>
							</ul>
					</div>
			</div>
			<!-----end-wrapper-dropdown-2---->
			<!-----start-script---->
			<script type="text/javascript">
							function DropDown(el) {
								this.dd = el;
								this.initEvents();
							}
							DropDown.prototype = {
								initEvents : function() {
									var obj = this;
				
									obj.dd.on('click', function(event){
										$(this).toggleClass('active');
										event.stopPropagation();
									});	
								}
							}
							$(function() {
				
								var dd = new DropDown( $('#dd') );
				
								$(document).click(function() {
									// all dropdowns
									$('.wrapper-dropdown-2').removeClass('active');
								});
				
							});
			</script>
			<!-----end-script---->
			<!----end-wrapper-demo----->
			<!-----start-copyright---->
			<div class="copy-right">
					<p>Template by <a href="http://w3layouts.com" target="_blank">w3layouts</a> </p>
			</div>
			<!-----end-copyright---->
			<!----end-body------->
                        <?php
                     }
                     ?>
	</body>
</html>