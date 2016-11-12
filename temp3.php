<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
         <title> Gvhss Cherpulassery</title>
        <link href="css/style6.css" rel="stylesheet" type="text/css" media="all">
    </head>
    <body>
        <table class="t1" summary="Top 10 downloaded movies in 2011 using BitTorrent, in descending order, listing number of downloads and worldwide cinema grosses">
<caption>Delete Staff Message</caption>
<thead>
    <tr><th>id</th><th>Message</th><th>Delete</th></th></tr>
</thead>
  <?php
$servername = "localhost";
$username = "root";
$fpassword = "root";
$dbname = "gvhsscee";
 $dest="1";
 $tid="0";
$conn = new mysqli($servername, $username, $fpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM message WHERE dest='$dest' ";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $id=$row["id"];
        $_SESSION["sid"]=$id;
         $_SESSION["sdest"]=$dest; 
        
          $tid=$tid+1;
        
        ?>
<tbody>

    <tr><th><?=$tid?></th><td><?=   $row["message"]?></td><td>  <a href="deletemessageaction.php"> delete</a>      </td></tr>
      
       
       
        <br>   
            
         <?php  
         
     
    }
} else {
    echo "0 results";
}

$conn->close();
?>

    
    
    
    
    


</tbody>
</table>
        <?
        // put your code here
        ?>
    </body>
</html>
