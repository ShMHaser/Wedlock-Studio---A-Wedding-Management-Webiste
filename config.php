<?php
$conn = mysqli_connect('localhost', 'root', '', 'wedlock_database');
if (!$conn) {
	echo "Connection Failed" . mysqli_connect_error();
}
?>