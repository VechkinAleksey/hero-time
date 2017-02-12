<! СКРИПТ: СКРИПТ ПРОВЕРКИ ЛОГИНА И ПАРОЛЯ С БД>
<html>
<META http-equiv=content-type content="text/html; charset=utf8">
<LINK href="main.css" type=text/css rel=stylesheet>

<SCRIPT>
   function setCookie(name, value) {
      document.cookie=name+"="+escape(value)+"; path=/";
   }
</SCRIPT>
<?php
session_start();

require_once 'connect.php';

	$login =$_POST['login'];
	$pass = $_POST['pass'];
	$index = $_POST['index'];
	$user_id='';
//	$per_id='';
$pers_id='';
	
 if(isset($_POST['index'])){
	 
	  $query = "SELECT USER_ID, Nick_Name, User_Pass
            FROM users
            WHERE Nick_Name= '$login' AND 	User_Pass = '$pass' 
            ";
    $sql = mysqli_query($link, $query) or die(mysqli_error($link));
	$f = mysqli_fetch_array($sql);
 }

 
 if($f['Nick_Name']==  $login  && $f['User_Pass'] ==  $pass ){
	 //print "Добро пожаловать! {$f['Nick_Name']}";
	 
	  $_SESSION['USER_ID'] ;
	  $user_id	= $f['USER_ID'];
		  $_SESSION['USER_ID'] = $user_id ;
		
		echo "" .$_SESSION['USER_ID']."";
		
		echo " Ваш новый id $user_id";
		
	 echo "<br>Ваш id = {$f['USER_ID']}</br>";
	 echo "Добро пожаловать, {$f['Nick_Name']}";
	 
	 
	//$query="SELECT * FROM users ";
//	$result=mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
   //$row = mysqli_fetch_array( $result);
	

			  $pers_id= $user_id; 
			   echo "<br>Новый id, $pers_id </br>";
			   
		//	   	$query="SELECT * FROM person ";
	//$result=mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
//	$row = mysqli_fetch_array( $result);
		
//echo $query = "INSERT INTO person (us_id)" ."VALUES('{$user_id}');";
//echo $query = "INSERT INTO person (us_id) VALUES({$user_id});";
 $query = "INSERT INTO person (us_id)" ."VALUES('{$user_id}');";
  $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

	 print( '<SCRIPT>
	alert("Авторизация прошла успешно!"); </SCRIPT>' );
	//$_SESSION['user_id']=$_POST['user_id'];
// // //	
print('<SCRIPT>location.href="game.php?Nick_Name='.$login.'";</SCRIPT>');
	// <a href="game.php"><input type="button" value="Войти в игру" name=buttonreg onClick=but1()></a>

 } else{
	 echo "Не верные данные!";
	 //<a href="index.php"><input type="button" value="Попробуйте ввести данные заново. Перейдите на главную страницу" name=buttonreg onClick=but1()></a>
 }

 
 
?>
</html>
