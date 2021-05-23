
<?php 
if(isset($_POST['user_submit'])){

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'prayagism';
$UserFirstName = $_POST['firstname'];
$UserLastName = $_POST['lastname'];
$UserEmail = $_POST['email'];
$UserState = $_POST['user_state'];
$UserContact = $_POST['contact'];

$UserGender = $_POST['user_gender'];
$UserPassword = $_POST['user_password'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = " INSERT INTO registered_user (firstname,lastname,email,user_state,contact,user_gender,user_password)
VALUES ('$UserFirstName' , '$UserLastName' , '$UserEmail' , '$UserState' , '$UserContact' , '$UserGender' , '$UserPassword') ";



if ($conn->query($sql) === TRUE) {
  echo "WELCOME TO PRAYAGRAJ";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
else
{
   echo "SORRY :-( ,TRY AGAIN";
}
?>
<html>
<head>
  <title>Welcome</title>
</head>
<body style=" justify-content: center; display: grid; align-content: center; font-size: 7vw;">

</body>
</html>