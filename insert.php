<?php 
//echo phpinfo();
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "Wwyan107";
$mysql_database = "contact";


// $con = mysqli_connect($db_hostname,$db_username,$db_password, $db_database);
$con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);

if (!$con) {
		echo "Error:Unable to connect to MySQL." . PHP_EOL;
		echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
		echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
		exit;
}

//echo here;
//echo $con;

/*
mysqli_select_db($mysql_database, $con)
or die("Unable to select database: " . mysqli_error());
*/
    
if (isset($_POST['firstname']) &&
isset($_POST['lastname']) &&
isset($_POST['email']) &&
isset($_POST['message']))
{
   $FirstName = $_POST['firstname'];
   $LastName = $_POST['lastname'];
   $Email = $_POST['email'];
   $Message = $_POST['message'];

/*
echo $FirstName;
echo $LastName;
echo $Email;
echo $Message;
*/
		
  // $query = INSERT INTO info (FirstName, LastName, Email, Message) VALUES ('$FirstName', '$LastName', '$Email', '$Message');
  mysqli_query($con,"INSERT INTO info (firstname, lastname, email, message) 
  VALUES ('$FirstName', '$LastName', '$Email', '$Message')");



echo "Your request has been processed. Thank you for choosing Tiffany !";
		
/* if (!mysqli_query($query, $con)) 
      die ("INSERT failed: $mysql_query ". mysqli_error());
*/
} 


mysqli_close($con);

?>
