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
<td width="99" height="176" rowspan="5" valign="top" colspan="2"><img border="0" name = "mainimage" src="items/pers.jpg"></td>
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
	//$user_id="";
	

// echo $query = "SELECT * FROM users WHERE USER_ID= '$user_id'  ";
			
     // echo 
	//  $query = "SELECT * FROM person WHERE Character_Strength= '$strength' AND 	Character_Dexterity = '$dexterity'
		//	AND Character_Accuracy= '$accuracy' AND Character_Endurance= '$endurance'
		//	AND Character_Money= '$money' ";
		
		//$query = "SELECT b.BuildingName, u.Building FROM users u inner join Buildings b on b.id = u.Building WHERE Nick_Name='$aNickName'";
		
		$query = " SELECT p.Character_Strength, p.Character_Dexterity, p.Character_Accuracy, p.Character_Endurance, p.Character_Money FROM users u inner join person p on p.USER_ID=u.person_id ";
		
	//	$query = "SELECT Character_Strength, Character_Dexterity, Character_Accuracy, Character_Endurance, Character_Money FROM person" ;
		
			
			//$dexterity = $row["dexterity"];
			
	      $sql = mysqli_query($link, $query) or die(mysqli_error($link));
     
       $row = mysqli_fetch_array( $sql);
	   
	   echo $row['Character_Strength'];
	   
	//   f['Nick_Name']==  $login 
	  
		 //$strength  =  $row['Character_Strength'];
		 //echo $strength;
		
		//$strength =   $row["Character_Strength"];
		//	$dexterity =   $row["Character_Dexterity"];
	    //  $accuracy =   $row["Character_Accuracy"];
		//$endurance =   $row["Character_Endurance"];
	  // $money =   $row["Character_Money"];
	  
	 //  $level =   $row["level"];
	 //  mysqli_fetch_array( $sql);
	 //  mysql_fetch_array( $result);
	   
 //   $sql = mysqli_query($link, $querys) or die(mysqli_error($link));
//	$f = mysqli_fetch_array($sql); 
?>
<div style="position:absolute; left:10px;top:100px;bottom:0px;right:0px;">
<table border="1" width="183" height="228" cellspacing="0" cellpadding="0" bgcolor="#BFBFBF" bordercolor="#666699">
<td width="252" height="1" valign="top"><font color="#000080">
Сила: <?php echo  "{$row['Character_Strength']}"?><br>
Ловкость: <?php echo "$dexterity"; ?><br>
Точность: <?php echo "$accuracy"; ?><br>
Выносливость: <?php echo "$endurance"; ?><br>  
<HR>
Опыт: 0 <br>
Уровень: 0<br>
Побед: 0 <br>
Поражений: 0<br>
Ничьих: 0<br>
Деньги: </font><b><font color="#FF0000"><?php echo "$money"; ?> </font></b> <font color="#000080">кр<br>
<HR>
<p>&nbsp;</font>
</td>
</table>
</div>
</html>