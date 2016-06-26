<?php
session_start();

$conn = new mysqli('localhost', 'adminRRFevX1', 'SzNbpq4StL7a', 'web');

if($_POST) {

		$emaillog = $_POST['emaillog'];
		$passlog = $_POST['passlog'];

		$sql = "SELECT COUNT(*) as num FROM users WHERE email = '$emaillog'";
		$result = mysqli_query($conn,$sql);
		$data = mysqli_fetch_assoc($result);

		$sql = "SELECT * FROM users WHERE email = '$emaillog'";
		$result2 = mysqli_query($conn,$sql);
		$data2 = mysqli_fetch_assoc($result2);

		if ($data['num'] > 0) {
			if ($data2['password'] == $passlog) {
				$_SESSION['email'] = $emaillog;
			} else {
				$_SESSION['email'] = "";
			}
		}
}
?>
