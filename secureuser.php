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
                    
                     $su=$_SESSION["staff"];
                     if($su==="qqqq")
                     {
                         
                     
                    
                    
                    
                    ?>
			<!----start-body------->
			<!----star-wrapper-demo------->
			<div class="wrapper-demo">
				<!-----start-wrapper-dropdown-2---->
					<div id="dd" class="wrapper-dropdown-2" tabindex="1">SCHOOL ADMIN<span><img src="images/menu.png"/></span>
							<ul class="dropdown">
					 
                                                            
                                           <li><a href="addstudentmessage.php">Add Student Message<span class="icon signout"> </span></a></li>
                                          <li><a href="addstaffmessage.php">Add Staff Message<span class="icon signout"> </span></a></li>
                                     <li><a href="deletestudentmessage.php">Delete Student Message<span class="icon signout"> </span></a></li>
                                       <li><a href="deletestaffmessage.php">Delete Staff Message<span class="icon signout"> </span></a></li>
                                        <li><a href="viewmessage.php">View Message<span class="icon signout"> </span></a></li>
                                         <li><a href="addstaff.php">Add Staff<span class="icon signout"> </span></a></li>
                                        <li> <a href="deletestaff.php">Delete Staff<span class="icon signout"> </span></a></li>
                                        <li><a href="triggerresult.php">Trigger Result<span class="icon signout"> </span></a></li>
					<li><a href="deletesecondyear.php ">Delete Second Year<span class="icon signout"> </span></a></li>
                                        <li><a href="securelogout.php">Logout</a></li>
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
					
                        </div>
			<!-----end-copyright---->
			<!----end-body------->
                     <?php } ?>
	</body>
</html>