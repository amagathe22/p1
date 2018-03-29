<?php

$login = $_POST['login'];
$password = $_POST['password'];

if ($login=="abc" && $password=="123"){
	include "Vue/afficheoffre.php";
}else {
	include "Vue/error.php";
}

?>