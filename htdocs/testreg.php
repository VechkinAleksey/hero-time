<! СКРИПТ: СКРИПТ ПРОВЕРКИ РЕГЕСТРАЦИОННОЙ ФОРМЫ>
<html>
<head>
       <title>Title here!</title>
	   	<META http-equiv=content-type content="text/html; charset=utf8">
</head>
<body>
  <?php

require_once 'connect.php'; // подключаем скрипт
//header("Content-Type: text/html; charset=utf-8");
mysqli_query($link, "SET CHARACTER SET utf8");
	// подключаемся к серверу
	//$link = mysqli_connect($host, $user, $password, $database)
	//or die("Ошибка" .mysqli_error($link));
 
	$nickname = trim($_POST['nickname']);
	//$pass = trim(md5($_POST['pass']));
	$pass = trim($_POST['pass']);
	$fio = trim($_POST['fio']);
	$email = trim($_POST['email']);
	//$date = time();
	$id_dates = date("Y-m-d H:i:s");
	$year = trim($_POST['year']);
	$month = trim($_POST['month']);
	$day = trim($_POST['day']);
	$date = $year."-".$month."-".$day;
	$answer = trim($_POST['answer']);
	$gender = trim($_POST['gender']);
		 if ($gender=='Мужской'){
         $gender = 1;
         }else{
         $gender = 2;
         }
	$city   = trim($_POST['city']);
		  
		  $force = 3;
		  $force_total = 3;
		  $dexterity = 3;
		    $dexterity_total = 0;
		  $accuracy = 3;
		  $accuracy_total = 0;
		  $endurance = 3;
		  $money=200;
		  $character_sword=0;
		  $character_spear=0;
		  $character_axe=0;
		  $character_mace=0;
		  $character_dagger=0;
		  $character_curhealth=0;
		  $character_maxhealth=20;
		  $character_level=0;
		  $character_experience=0;
		  $character_nextexperience=10;
		  $character_unused_points=3;
		  $town=0;
		  $building=0;
		  $moving_type=0;
		  $EndMoving_Time=0;
		  $Character_Disposition=0;
		  $Character_Clan=0;
		  $Character_Image='items/rres1.jpg';   
		  $Character_MaxWeigth=20;
		  $Helmet_Slot=0;
		  $Shield_Slot=0;
		  $Weapon_Slot=0;
		  $Gloves_Slot=0;
		  $Shoes_Slot=0;
		  $Armor_Slot=0;
		  $Necklace_Slot=0;
		  $Ring1_Slot=0;
		  $Ring2_Slot=0;
		  $Ring3_Slot=0;
		  $Ring4_Slot=0;
		  $Ear_Slot=0;
		  $Belt_Slot=0;
		//   $per_id='';
		  
		  
		  // создание строки запроса
		  $query = "INSERT INTO users (Nick_Name, User_Pass, 	User_Email, Full_Name, Security_Answer, User_Gender, User_City, User_Birth_Day, Character_Birth_Day)" ."VALUES('{$nickname}', '{$pass}', '{$email}', '{$fio}', '{$answer}', '{$gender}', '{$city}', '{$date}', '{$id_dates}');";
          
		  // выполняем запрос
		   $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
		   
		//   $pers_id= ''; 
		//   $query = "INSERT INTO person (us_id)" ."VALUES('{$pers_id}');";
		//	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

		  
		  //$query = "INSERT INTO person (Character_Strength, 	Character_Dexterity, 	Character_Accuracy, Character_Endurance)" ."VALUES('{$force}', '{$dexterity}', '{$accuracy}', '{$endurance}');";
		  
		  //$query = "INSERT INTO person (Character_Strength, 	Character_Dexterity, 	Character_Accuracy, Character_Endurance, Character_Money, Character_Strength_Total, Character_Accuracy_Total, Character_Dexterity_Total, Character_Sword, Character_Spear, Character_Axe, Character_Mace, Character_Dagger, Character_CurHealth, Character_MaxHealth, Character_Level, Character_Experience, Character_NextExperience, Character_UnUsed_Points, Town, Building, Moving_Type, EndMoving_Time, Character_Disposition, Character_Clan, Character_Image, Character_MaxWeigth, Helmet_Slot, Shield_Slot, Weapon_Slot, Gloves_Slot, Shoes_Slot, Armor_Slot, Necklace_Slot, Ring1_Slot, Ring2_Slot, Ring3_Slot, Ring4_Slot, Ear_Slot, Belt_Slot)" ."VALUES('{$force}', '{$dexterity}', '{$accuracy}', '{$endurance}', '{$money}', '{$force_total}', '{$accuracy_total}', '{$dexterity_total}', '{$character_sword}', '{$character_spear}', '{$character_axe}', '{$character_mace}', '{$character_dagger}', '{$character_curhealth}', '{$character_maxhealth}', '{$character_level}', '{$character_experience}', '{$character_nextexperience}', '{$character_unused_points}', '{$town}', '{$building}', '{$moving_type}', '{$EndMoving_Time}', '{$Character_Disposition}', '{$Character_Clan}', '{$Character_Image}', '{$Character_MaxWeigth}', '{$Helmet_Slot}', '{$Shield_Slot}', '{$Weapon_Slot}', '{$Gloves_Slot}', '{$Shoes_Slot}', '{$Armor_Slot}', '{$Necklace_Slot}', '{$Ring1_Slot}', '{$Ring2_Slot}', '{$Ring3_Slot}', '{$Ring4_Slot}', '{$Ear_Slot}', '{$Belt_Slot}');";
			   
			   
//	$query="SELECT * FROM users ";
	//$result=mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
   //$row = mysqli_fetch_array( $result);
	
   //$per_id=$row["USER_ID"];
			   
			   
			//   $row = mysqli_fetch_array( $result);
		//	   $per_id=$row["USER_ID"];
		
//		  $query = "INSERT INTO person (us_id)" ."VALUES('{1}');";
//		    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
			
			//  $query = "INSERT INTO person (Character_Strength, 	Character_Dexterity, 	Character_Accuracy, Character_Endurance, Character_Money, Character_Strength_Total, Character_Accuracy_Total, Character_Dexterity_Total, Character_Sword, Character_Spear, Character_Axe, Character_Mace, Character_Dagger, Character_CurHealth, Character_MaxHealth, Character_Level, Character_Experience, Character_NextExperience, Character_UnUsed_Points, Town, Building, Moving_Type, EndMoving_Time, Character_Disposition, Character_Clan, Character_Image, Character_MaxWeigth, Helmet_Slot, Shield_Slot, Weapon_Slot, Gloves_Slot, Shoes_Slot, Armor_Slot, Necklace_Slot, Ring1_Slot, Ring2_Slot, Ring3_Slot, Ring4_Slot, Ear_Slot, Belt_Slot)" ."VALUES('{$force}', '{$dexterity}', '{$accuracy}', '{$endurance}', '{$money}', '{$force_total}', '{$accuracy_total}', '{$dexterity_total}', '{$character_sword}', '{$character_spear}', '{$character_axe}', '{$character_mace}', '{$character_dagger}', '{$character_curhealth}', '{$character_maxhealth}', '{$character_level}', '{$character_experience}', '{$character_nextexperience}', '{$character_unused_points}', '{$town}', '{$building}', '{$moving_type}', '{$EndMoving_Time}', '{$Character_Disposition}', '{$Character_Clan}', '{$Character_Image}', '{$Character_MaxWeigth}', '{$Helmet_Slot}'), '{$Shield_Slot}', '{$Weapon_Slot}', '{$Gloves_Slot}', '{$Shoes_Slot}', '{$Armor_Slot}', '{$Necklace_Slot}', '{$Ring1_Slot}', '{$Ring2_Slot}', '{$Ring3_Slot}', '{$Ring4_Slot}', '{$Ear_Slot}', '{$Belt_Slot}');";
			
	
		  // закрываем подключение
		  mysqli_close($link);
		  if($result)
		  {
			  echo "<span style='color:blue;'>Данные добавлены</span>";
		  }
  ?><code lang="php">
  <form action="index.php" method="get">
  <input type="submit" value="На главную"></form>
</body>
</html>
