<?php
session_start();

if ($_SESSION['email'] != null) {
	echo "<div class='fadein'>Bem vindo, ".$_SESSION['email']."</div>";
} else {
	echo "<div class='fadein'>Dados incorretos, registe-se</div>";
}
