<html>

<div style="position:absolute; left:200px;top:100px;bottom:0px;right:0px;">
<div style="position:absolute; left:25px;top:-19px;bottom:0px;right:0px;">
<?php
echo "Ник: {$login}";
echo " ID [".$_SESSION['USER_ID']."]";
//echo "{$level}";
//echo "Ранг: {$rang1}"
?>
</div>
<table border="1" width="183" height="228" cellspacing="0" cellpadding="0" bgcolor="#BFBFBF" bordercolor="#666699">
<tr>
<td width="27" height="32" rowspan="2" colspan="2" valign="top"><img src="items\helmet_empty.jpg"></td>
<td width="99" height="176" rowspan="5" valign="top" colspan="2"><img border="0" name = "mainimage" src="items/rres1.jpg"></td>
<td width="49" height="23" colspan="2" valign="top"><img src="items\ear_empty.jpg"></td>
</tr>
<tr>
<td width="49" height="2" colspan="2" valign="top"><img src="items\necklace_empty.jpg"></td>
</tr>
<tr>
<td width="27" height="80" colspan="2" valign="top"><img src="items\weapon_empty.jpg"></td>
<td width="49" height="80" colspan="2" valign="top"><img src="items\shield_empty.jpg"></td>
</tr>
<tr>
<td width="1" height="24" valign="top"><img src="items\ring_empty.jpg"></td>
<td width="25" height="24" valign="top"><img src="items\ring_empty.jpg"></td>
<td width="22" height="24" valign="top"><img src="items\ring_empty.jpg"></td>
<td width="26" height="24" valign="top"><img src="items\ring_empty.jpg"></td>
</tr>
<tr>
<td width="27" height="77" colspan="2" rowspan="2" valign="top"><img src="items\armor_empty.jpg"></td>
<td width="49" height="40" colspan="2" valign="top"><img src="items\gloves_empty.jpg"></td>
</tr>
<tr>
<td width="99" height="34" valign="top" colspan="2">&nbsp;</td>
<td width="49" height="31" colspan="2" valign="top" rowspan="2"><img src="items\shoes_empty.jpg"></td>
</tr>
<tr>
<td width="27" height="1" colspan="2" valign="top"><img src="items\belt_empty.jpg"></td>
<td width="44" height="3" valign="top">&nbsp;</td>
<td width="53" height="3" valign="top">&nbsp;</td>
</tr>
</table>
</div>
<?php

require_once 'connect.php';

	$strength="";
	$dexterity="";
	$accuracy="";
	$endurance="";
	$money="";
	$peson="";
	$rangos="";

	$query="SELECT * FROM users ";
	$result=mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
   $row = mysqli_fetch_array( $result);
	
	$strength=$row["Nick_Name"];
	
	$query="SELECT * FROM users ";
		$result=mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
   $row = mysqli_fetch_array( $result);
 
	$dexterity=$row["id_clan"];
	if($dexterity>0){
		$query="SELECT * FROM clan ";
		$result=mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
   $row = mysqli_fetch_array( $result);
   
   $clan_name=$row["name"];
	}
	
	$query="SELECT * FROM users ";
		$result=mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
   $row = mysqli_fetch_array( $result);
   
//	$rangos=$row["id_rang"];
	$query="SELECT * FROM rang ";
		$result=mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
   $row = mysqli_fetch_array( $result);
   $rang_points=$row["number_rang"];
  
  
  	$query="SELECT * FROM users ";
		$result=mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
   $row = mysqli_fetch_array( $result);
  	//$peson=$row["person_id"];
		$query="SELECT * FROM person ";
		$result=mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
   $row = mysqli_fetch_array( $result);
   $person_points=$row["Character_Strength"];
   $dexterity=$row["Character_Dexterity"];
   $accuracy=$row["Character_Accuracy"]; 
   $endurance=$row["Character_Endurance"];
   $experience=$row["Character_Experience"];
   $level=$row["Character_Level"];
   $money=$row["Character_Money"];
  
	/*
	if($rangos=100){
		$query="SELECT * FROM rang ";
		$result=mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
   $row = mysqli_fetch_array( $result);
   
   $rang_points=$row["number_rang"];
   echo "<img src='img/rang/1.jpg'>"; 

	}
	*/
	
/*
	 $query = "SELECT * FROM person WHERE Character_Strength= '$strength' AND 	Character_Dexterity = '$dexterity'
			AND Character_Accuracy= '$accuracy' AND Character_Endurance= '$endurance'
		AND Character_Money= '$money' ";
		


	      $sql = mysqli_query($link, $query) or die(mysqli_error($link));
     if($sql){
		 echo "Всё норм";
	 }
	 
	 
       $row = mysqli_fetch_array( $sql);

	   $row["Character_Strength"];
	   $strength =  $row["Character_Strength"];
	   echo 	   $strength ;
	*/
		
		//$strength =   $row["Character_Strength"];
		//	$dexterity =   $row["Character_Dexterity"];
	    //  $accuracy =   $row["Character_Accuracy"];
		//$endurance =   $row["Character_Endurance"];
	  // $money =   $row["Character_Money"];
	  

?>


<div style="position:absolute; left:10px;top:80px;bottom:0px;right:0px;">
<table border="1" width="183" height="228" cellspacing="0" cellpadding="0" bgcolor="#BFBFBF" bordercolor="#666699">
<td width="252" height="1" valign="top"><font color="#000080">
Сила: <?php echo  "$person_points";?><br>
Ловкость: <?php echo "$dexterity"; ?><br>
Точность: <?php echo "$accuracy"; ?><br>
Выносливость: <?php echo "$endurance"; ?><br>  
<HR>
Опыт:  <?php echo "$experience"; ?><br>  
Уровень: <?php echo "$level"; ?><br>  
Побед: 0 <br>
Поражений: 0<br>
Ничьих: 0<br>
Деньги: </font><b><font color="#FF0000"><?php echo "$money"; ?> </font></b> <font color="#000080">кр<br>
<HR>
 <?php // Ник:echo "$strength"; ?><br>  
 <?php // Клан: echo "$clan_name"; ?><br>  

 <?php //Ранг:
//if($id_rang=1){
//echo "<img src='img/rang/rang0.jpg'>"; }
?><br>  
<p>&nbsp;</font>
</td>
</table>
</div>
</html>