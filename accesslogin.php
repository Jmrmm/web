<?php
session_start();

$conn = new mysqli('localhost', 'adminQBxiRqe', 'BzSq4kWkDQvU', 'moon');

if($_POST) {

		$emaillog = $_POST['emaillog'];
		$passlog = $_POST['passlog'];

		$sql = "SELECT * FROM users WHERE email = '$emaillog'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			if ($result->fetch_assoc()['password'] == $passlog) {
				$_SESSION['email'] = $emaillog;
			} else {
				$_SESSION['email'] = null;
			}
		}
}
?>
