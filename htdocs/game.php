<html>

<body background="img/f57AKB.jpg">
</body>

<?php
session_start();

require_once 'connect.php';
//require_once 'chat.html';
//require_once 'room.php';

if (!empty($_GET['Nick_Name'])){
//$login = $_GET['Nick_Name'];
//echo "Добро пожаловать, {$login}";
	 //echo "Ваш id = ['USER_ID']";

	 	//  $_SESSION['USER_ID'] ;
	  //$user_id	=  $_SESSION['USER_ID'];
//echo "Ваш id ".$_SESSION['USER_ID'];
	 
include "chat.html";
include "room.php";
include "buttons.html";
include "main.php";
include "karta.php";



include "knopki.php";
//include "audio.php";

} else {
// На стартовую
 print( '<SCRIPT>
	alert("Что то пошло не так!"); </SCRIPT>' );
print( '<SCRIPT>top.location.href="index.php";</SCRIPT>' );
}
?>


</html>
