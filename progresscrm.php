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
         <link href="css/style9.css" rel="stylesheet" type="text/css" media="all">
    </head>
    <body>
               
    <h1>
        <a href="" class="myButton"onclick="myFunction('print')">Print</a></h1>

<script>
      
    
function myFunction(divName) {
    
    var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
<div id ="print">
        <?php
            $branch= $_SESSION["sbranch"];
       $email= $_SESSION["semail"];
       $password= $_SESSION["spassword"];
  $servername = "localhost";
$username = "u476506544_abhi";
$fpassword = "abhishek";
$dbname = "u476506544_gvhss";
 
// Create connection
$conn = new mysqli($servername, $username, $fpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM crm WHERE email='$email' AND password='$password'";

$result = $conn->query($sql);

if ($result) {
    // output data of each row
   if($result->num_rows>0)
   {
       if($row = $result->fetch_assoc())
       {
           
           
           $trigger=$row["triggera"];
           if($trigger==="6")
           {
          $r="Model(2)";
      $tid="1";
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
   <tr><th><?=$tid?></th><td>CRM(THEORY)</td><td><?=  $row["crmt$trigger"]?></td></tr>
      <?php $tid++;?>
   <tr><th><?=$tid?></th><td>BUSINESS STUDIES</td><td><?=  $row["bs$trigger"]?></td></tr>
      <?php $tid++;?>
   <tr><th><?=$tid?></th><td>C ACCOUNTANCY</td><td><?=   $row["accountancy$trigger"]?></td></tr>
      <?php $tid++;?>
   <tr><th><?=$tid?></th><td>MANAGEMENT</td><td><?=  $row["management$trigger"]?></td></tr>
      <?php $tid++;?>
    <tr><th><?=$tid?></th><td>CRM(PRACTICAL)</td><td><?=  $row["crmp$trigger"]?></td></tr>
      <?php $tid++;?>
     <tr><th><?=$tid?></th><td>COMPUTER(PRATICAL)</td><td><?=  $row["cp$trigger"]?></td></tr>
      <?php $tid++;?>
      <tr><th><?=$tid?></th><td>ACCOUNTANCY(PRATICAL)</td><td><?=  $row["ap$trigger"]?></td></tr>
      <?php $tid++;?>
       
        
       
            
         <?php  
            --$trigger;
           
           }
          
            if($trigger=="5")
           {
      $r="Halfyearly(2)";
      $tid="1";
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
   <tr><th><?=$tid?></th><td>CRM(THEORY)</td><td><?=  $row["crmt$trigger"]?></td></tr>
      <?php $tid++;?>
   <tr><th><?=$tid?></th><td>BUSINESS STUDIES</td><td><?=  $row["bs$trigger"]?></td></tr>
      <?php $tid++;?>
   <tr><th><?=$tid?></th><td>C ACCOUNTANCY</td><td><?=   $row["accountancy$trigger"]?></td></tr>
      <?php $tid++;?>
   <tr><th><?=$tid?></th><td>MANAGEMENT</td><td><?=  $row["management$trigger"]?></td></tr>
      <?php $tid++;?>
    <tr><th><?=$tid?></th><td>CRM(PRACTICAL)</td><td><?=  $row["crmp$trigger"]?></td></tr>
      <?php $tid++;?>
     <tr><th><?=$tid?></th><td>COMPUTER(PRATICAL)</td><td><?=  $row["cp$trigger"]?></td></tr>
      <?php $tid++;?>
      <tr><th><?=$tid?></th><td>ACCOUNTANCY(PRATICAL)</td><td><?=  $row["ap$trigger"]?></td></tr>
      <?php $tid++;?>
       
        
       
            
         <?php  
            --$trigger;
           
           }
          
            if($trigger=="4")
           {
       $tid="1";
          $r="Quaterly(2)";
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
   <tr><th><?=$tid?></th><td>CRM(THEORY)</td><td><?=  $row["crmt$trigger"]?></td></tr>
      <?php $tid++;?>
   <tr><th><?=$tid?></th><td>BUSINESS STUDIES</td><td><?=  $row["bs$trigger"]?></td></tr>
      <?php $tid++;?>
   <tr><th><?=$tid?></th><td>C ACCOUNTANCY</td><td><?=   $row["accountancy$trigger"]?></td></tr>
      <?php $tid++;?>
   <tr><th><?=$tid?></th><td>MANAGEMENT</td><td><?=  $row["management$trigger"]?></td></tr>
      <?php $tid++;?>
    <tr><th><?=$tid?></th><td>CRM(PRACTICAL)</td><td><?=  $row["crmp$trigger"]?></td></tr>
      <?php $tid++;?>
     <tr><th><?=$tid?></th><td>COMPUTER(PRATICAL)</td><td><?=  $row["cp$trigger"]?></td></tr>
      <?php $tid++;?>
      <tr><th><?=$tid?></th><td>ACCOUNTANCY(PRATICAL)</td><td><?=  $row["ap$trigger"]?></td></tr>
      <?php $tid++;?>
       
        
       
            
         <?php  
             --$trigger;
           }
         
            if($trigger=="3")
           {
         $tid="1";
          $r="Model(1)";
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
   <tr><th><?=$tid?></th><td>CRM(THEORY)</td><td><?=  $row["crmt$trigger"]?></td></tr>
      <?php $tid++;?>
   <tr><th><?=$tid?></th><td>BUSINESS STUDIES</td><td><?=  $row["bs$trigger"]?></td></tr>
      <?php $tid++;?>
   <tr><th><?=$tid?></th><td>C ACCOUNTANCY</td><td><?=   $row["accountancy$trigger"]?></td></tr>
      <?php $tid++;?>
   <tr><th><?=$tid?></th><td>MANAGEMENT</td><td><?=  $row["management$trigger"]?></td></tr>
      <?php $tid++;?>
    <tr><th><?=$tid?></th><td>CRM(PRACTICAL)</td><td><?=  $row["crmp$trigger"]?></td></tr>
      <?php $tid++;?>
     <tr><th><?=$tid?></th><td>COMPUTER(PRATICAL)</td><td><?=  $row["cp$trigger"]?></td></tr>
      <?php $tid++;?>
      <tr><th><?=$tid?></th><td>ACCOUNTANCY(PRATICAL)</td><td><?=  $row["ap$trigger"]?></td></tr>
      <?php $tid++;?>
       
        
       
            
         <?php  
            --$trigger;
           
           }
          
            if($trigger=="2")
           {
                $tid="1";
      $r="Halfyearly(1)";
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
   <tr><th><?=$tid?></th><td>CRM(THEORY)</td><td><?=  $row["crmt$trigger"]?></td></tr>
      <?php $tid++;?>
   <tr><th><?=$tid?></th><td>BUSINESS STUDIES</td><td><?=  $row["bs$trigger"]?></td></tr>
      <?php $tid++;?>
   <tr><th><?=$tid?></th><td>C ACCOUNTANCY</td><td><?=   $row["accountancy$trigger"]?></td></tr>
      <?php $tid++;?>
   <tr><th><?=$tid?></th><td>MANAGEMENT</td><td><?=  $row["management$trigger"]?></td></tr>
      <?php $tid++;?>
    <tr><th><?=$tid?></th><td>CRM(PRACTICAL)</td><td><?=  $row["crmp$trigger"]?></td></tr>
      <?php $tid++;?>
     <tr><th><?=$tid?></th><td>COMPUTER(PRATICAL)</td><td><?=  $row["cp$trigger"]?></td></tr>
      <?php $tid++;?>
      <tr><th><?=$tid?></th><td>ACCOUNTANCY(PRATICAL)</td><td><?=  $row["ap$trigger"]?></td></tr>
      <?php $tid++;?>
       
        
       
            
         <?php  
           
            --$trigger;
           }
          
            if($trigger=="1")
           {
            $tid="1";
            $r="Quaterly(1)";
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
   <tr><th><?=$tid?></th><td>CRM(THEORY)</td><td><?=  $row["crmt$trigger"]?></td></tr>
      <?php $tid++;?>
   <tr><th><?=$tid?></th><td>BUSINESS STUDIES</td><td><?=  $row["bs$trigger"]?></td></tr>
      <?php $tid++;?>
   <tr><th><?=$tid?></th><td>C ACCOUNTANCY</td><td><?=   $row["accountancy$trigger"]?></td></tr>
      <?php $tid++;?>
   <tr><th><?=$tid?></th><td>MANAGEMENT</td><td><?=  $row["management$trigger"]?></td></tr>
      <?php $tid++;?>
    <tr><th><?=$tid?></th><td>CRM(PRACTICAL)</td><td><?=  $row["crmp$trigger"]?></td></tr>
      <?php $tid++;?>
     <tr><th><?=$tid?></th><td>COMPUTER(PRATICAL)</td><td><?=  $row["cp$trigger"]?></td></tr>
      <?php $tid++;?>
      <tr><th><?=$tid?></th><td>ACCOUNTANCY(PRATICAL)</td><td><?=  $row["ap$trigger"]?></td></tr>
      <?php $tid++;?>
       
        
       
            
         <?php  
         
           
           
           }
          
           
                   
       }
   }
 
}

 


$conn->close();  
       
        // put your code here
        ?>
</tbody></table></div>
    </body>
</html>
