<html>


<?php
//session_start();

require_once 'connect.php';
//require_once 'chat.html';
//require_once 'room.php';

$login = $_GET['Nick_Name'];
?>

Добро пожаловать,<font color="#000080">
<?php
echo "{$login}";
echo " ID [".$_SESSION['USER_ID']."]";
?>
</font>




</html>
