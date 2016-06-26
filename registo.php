<?php
session_start();

if ($_SESSION['email'] != "") {
	echo "<div class='fadein'>Bem vindo, ".$_SESSION['email']."</div>";
} else {
	echo "<div class='fadein'>Email já registado, faça o seu login</div>";
}
?>
