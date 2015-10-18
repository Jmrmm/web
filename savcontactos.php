<?php
$conn = new mysqli('localhost', 'adminQBxiRqe', 'BzSq4kWkDQvU', 'moon');

if($_POST) {
	$nome=$_POST['nome'];
	$email=$_POST['email'];
	$msg=$_POST['msg'];

	$sql = "INSERT INTO contactos (nome, email, mensagem) VALUES ('$nome', '$email', '$msg')";
	$conn->query($sql);
}
?>
