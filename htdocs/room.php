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
   
.prokrutka {
height: 145px;
width: 264px;
background: #fff; /
border: 1px solid #C1C1C1; 

overflow-y: scroll;
}
  </style>
 </head>
  <?php
  //echo "{$login}";
// $_SESSION['USER_ID'] 

	  //$_SESSION['USER_ID'] ;
	//  $user_id	= $f['USER_ID'];
		//  $_SESSION['USER_ID'] = $user_id ;

require_once 'connect.php';
mysqli_query($link, "SET CHARACTER SET utf8");

$login = $_GET['Nick_Name'];


	$query="SELECT * FROM users ";
	$result=mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
   $row = mysqli_fetch_array( $result);
   
$sstrength=$row["USER_ID"];

$query="SELECT * FROM person ";
	$result=mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
   $a = mysqli_fetch_array( $result);
   
   	$level=$a["Character_Level"];
   
   $query="SELECT * FROM buildings ";
	$result=mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
   $row = mysqli_fetch_array( $result);
 $buld=$row["BuildingName"];
/*
	$query="SELECT * FROM users ";
	$result=mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
   $row = mysqli_fetch_array( $result);
   
	$_SESSION['Nick_Name'] ;
	$strength	= $row['Nick_Name'];
	 $_SESSION['Nick_Name'] = $strength ;

	//$strength=$row["Nick_Name"];
	$sstrength=$row["USER_ID"];
	
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
 
 */
?>
  
  
<body>
<div style="position:absolute; left:1348px;top:622px;bottom:0px;right:0px;">

<div id="mes"></div>
<div class="prokrutka"> 
  <!-- <div class="block2"> -->
  <center>
  Локация:  <?php   echo "$buld";  ?><br>  
 <p>
  <?php 
    echo "<img src='img/klan/klan1.jpg'>"; 
	?>
	<?php
 echo 	$login;
   ?>
 	<?php
 echo 	$sstrength;
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
</p>  
    </center>
</div> 
</div>
<!-- </div> -->
 <img src="img/ramka/31.png" style="position:absolute; left: 1324px;top:600px;bottom:0px;right:0px;">
<body bgcolor="">
</body>
</html>
