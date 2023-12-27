<?php
//Настройки подключения к БД
$db_host = 'localhost';
$db_user = 'w90318po_bd'; //имя пользователя совпадает с именем БД
$db_password = 'N2k3ita0987!'; //пароль, указаный при создании БД
$database = 'w90318po_bd'; //имя БД, которое было указано при создании
$mysqli = mysqli_connect($db_host, $db_user, $db_password, $database);
?>