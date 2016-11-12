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
        <link href="css/style8.css" rel="stylesheet" type="text/css" media="all">
    </head>
    <body>
        
  <?php
$servername = "localhost";
$username = "u476506544_abhi";
$fpassword = "abhishek";
$dbname = "u476506544_gvhss";
  $branch= $_SESSION["sbranch"];
       $email= $_SESSION["semail"];
       $password= $_SESSION["spassword"];
 $tid="1";
$conn = new mysqli($servername, $username, $fpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




$sql = "SELECT * FROM mlta WHERE email='$email' AND password='$password'";

$result = $conn->query($sql);



if ($result) {
    // output data of each row
   if($result->num_rows>0)
   {
       if($row = $result->fetch_assoc())
       {
         
           $trigger=$row["triggera"];
           $_SESSION["strigger"]=$trigger;
          
           
           if($trigger==="1")
               {
                   $r="Quaterly(1)";
                   
               }
               else if($trigger==="4")
               {
                   $r="Quaterly(2)";
                   
               }
               else if($trigger==="2")
               {
                   $r="Halfyearly(1)";
                   
               }
               else if($trigger==="5")
               {
                   $r="Halfyearly(2)";
                   
               }
               else if($trigger==="3")
               {
                   $r="Model(1)";
                   
               }
               else if($trigger==="6")
               {
                   $r="Model(2)";
                   
               }
               else
               {
                   $r="ee";
               }
        
          
        
        ?>
  
  <table class="t1" summary="Top 10 downloaded movies in 2011 using BitTorrent, in descending order, listing number of downloads and worldwide cinema grosses">
<caption><?=$r?>Result</caption>
<thead>
    <tr><th>No</th><th>Subject</th><th>Mark</th></tr>
</thead>
<tbody>

    <tr><th><?=$tid?></th><td>ENGLISH</td><td><?=  $row["english$trigger"]?></td></tr>
      <?php $tid++;?>
   <tr><th><?=$tid?></th><td>ED</td><td><?=  $row["ed$trigger"]?></td></tr>
      <?php $tid++;?>
   <tr><th><?=$tid?></th><td>MLT(THEORY)</td><td><?=$row["mlt$trigger"]?></td></tr>
      <?php $tid++;?>
   <tr><th><?=$tid?></th><td>PHYSICS</td><td><?= $row["physics$trigger"]?></td></tr>
      <?php $tid++;?>
   <tr><th><?=$tid?></th><td>CHEMISTY</td><td><?=   $row["chemistry$trigger"]?></td></tr>
      <?php $tid++;?>
   <tr><th><?=$tid?></th><td>BIOLOGY</td><td><?= $row["biology$trigger"]?></td></tr>
      <?php $tid++;?>
    <tr><th><?=$tid?></th><td>MLT(PRATICAL)</td><td><?=   $row["mltp$trigger"]?></td></tr>
      <?php $tid++;?>
     <tr><th><?=$tid?></th><td>PHYSICS(PRATICAL)</td><td><?=  $row["pp$trigger"]?></td></tr>
      <?php $tid++;?>
      <tr><th><?=$tid?></th><td>CHEMISTRY(PRATICAL)</td><td><?= $row["cp$trigger"]?></td></tr>
      <?php $tid++;?>
       <tr><th><?=$tid?></th><td>BIOLOGY(PRATICAL)</td><td><?=$row["bp$trigger"]?></td></tr>
      <?php $tid++;?>
        
       
            
         <?php  
         
     
    }
} }else {
    echo "0 results";
}

$conn->close();
?>

    
    
    
    
    


</tbody>
</table>
        <br><br>
        <br><h1>
            <a href="progressmlta.php" class="myButton">view progress card</a></h1>
        <?
        // put your code here
        ?>
    </body>
</html>
