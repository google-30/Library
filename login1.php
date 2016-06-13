<?php

// Inialize sessio

                         include 'connect.php';
						 $username = $_POST['username'];
						 $password = $_POST['password'];
						 $query  = "SELECT * FROM signup where username='$username' and password='$password' ";
                         $result = mysql_query($query) or die(mysql_error()) ;	  
						 $num_rows = mysql_num_rows($result);
 if (mysql_num_rows($result) == 1) {
// Set username session variable
$_SESSION['username'] = $username ;
  echo 'bye' ;
// Jump to secured page
 header('Location: securedlogin.php');
}
else {
	echo 'hello!!' ;
// Jump to login page
header('Location: html.html');
}

?>