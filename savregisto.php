<?php
session_start();

$conn = new mysqli('localhost', 'adminQBxiRqe', 'BzSq4kWkDQvU', 'moon');

if($_POST) {

		$emailreg = $_POST['emailreg'];
		$passreg = $_POST['passreg'];

		$sql = "SELECT * FROM users WHERE email = '$emailreg'";
		$result = $conn->query($sql);

		if ($result->num_rows == 0) {
			$sql = "INSERT INTO users (email, password) VALUES ('$emailreg', '$passreg')";
			$conn->query($sql);

			$_SESSION['email'] = $emailreg;
		} else {
			$_SESSION['email'] = null;
		}
}
?>
