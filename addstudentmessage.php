<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8" />
 <title> Gvhss Cherpulassery</title>

<link href="css/style5.css" rel="stylesheet" type="text/css" media="screen" />
 <link href="css/style8.css" rel="stylesheet" type="text/css" media="all">
</head>

<body>
     <p>
        <a href="secureuser.php" class="myButton">Back</a></p>

<div id="contact">
	<h1>New Message To Students</h1>
	<form action="addstudentmessageaction.php" method="post">
		<fieldset>
			
			
			<label for="message">Message:</label>
			<textarea id="message" name="message" placeholder="Type the message"></textarea>
			
			<input type="submit" value="Send message" />
			
		</fieldset>
	</form>
</div>

</body>
</html>