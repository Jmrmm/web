<?php
session_start();

$conn = new mysqli('localhost', 'adminRRFevX1', 'SzNbpq4StL7a', 'web');

if($_POST) {

		$emailreg = $_POST['emailreg'];
		$passreg = $_POST['passreg'];

		$sql = "SELECT COUNT(*) AS num FROM users WHERE email = '$emailreg'";
		$result = mysqli_query($conn,$sql);
		$data = mysqli_fetch_assoc($result);

		if($data['num'] == 0) {
			$sql = "INSERT INTO users (email, password) VALUES ('$emailreg', '$passreg')";
			mysqli_query($conn,$sql);

			$_SESSION['email'] = $emailreg;
		} else {
			$_SESSION['email'] = "";
		}
}
?>
