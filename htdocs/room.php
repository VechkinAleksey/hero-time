<html>

 <head>
<style type="text/css">
   .block2 { 
   
    width: 241px; 
	height: 140px;
    background: #fff; 
    padding: 5px; 
    padding-right: 20px; 
    border: solid 1px black;  
   }
  </style>
 </head>
  <?php

require_once 'connect.php';
mysqli_query($link, "SET CHARACTER SET utf8");

	$query="SELECT * FROM users ";
	$result=mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
   $row = mysqli_fetch_array( $result);
	
	$strength=$row["Nick_Name"];
	
	
	$query="SELECT * FROM person ";
	$result=mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
   $row = mysqli_fetch_array( $result);
	
	$level=$row["Character_Level"];
//	$buld=$row["bull_id"];

$query="SELECT * FROM buildings ";
	$result=mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
   $row = mysqli_fetch_array( $result);
 $buld=$row["BuildingName"];
 
 $query="SELECT * FROM rang ";
	$result=mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
   $row = mysqli_fetch_array( $result);
 $rangs=$row["id_rang"];
?>
  
  
<body>
<div id="mes"></div>
<div style="position:absolute; left:1348px;top:622px;bottom:0px;right:0px;">
  <div class="block2"> 
  <center>
  Локация:  <?php   echo "$buld";  ?><br>  
 
  <?php 
    echo "<img src='img/klan/klan1.jpg'>"; 
	?>
	<?php
  echo "$strength"; 
  echo "  [".$level."]"; 
  ?>
   <?php 
  echo "<img src='img/profa/profa1.jpg'>"; 
  ?>
    <?php 
    if($rangs=1){
  echo "<img src='img/rang/ran1.jpg'>"; 
  }?>
     <?php 
  echo "<img src='img/inf.jpg'>"; 

  ?><br>  
    </center>
</div> 
</div>
 <img src="img/ramka/31.png" style="position:absolute; left: 1324px;top:600px;bottom:0px;right:0px;">
<body bgcolor="">
</body>
</html>
