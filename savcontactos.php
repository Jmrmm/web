<?php
session_start();

$conn = new mysqli('localhost', 'adminRRFevX1', 'SzNbpq4StL7a', 'web');

if($_POST) {
	$nome=$_POST['nome'];
	$email=$_POST['email'];
	$msg=$_POST['msg'];

	$sql = "INSERT INTO contactos (nome, email, mensagem) VALUES ('$nome', '$email', '$msg')";
	$conn->query($sql);
}
?>
