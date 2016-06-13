<?php
    
    session_start();
	include 'connect.php';
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);
    $bool = true;

  //  mysql_connect("localhost", "root", "") or die (mysql_error()); //Connect to server
   // mysql_select_db("first_db") or die ("Cannot connect to database"); //Connect to database
    $query = mysql_query("Select * from signup WHERE username='$username' and password='$password'") or die(mysql_error()) ;	  // Query the users table
    $exists = mysql_num_rows($query); //Checks if username exists
    
    if($exists == 1) //IF there are no returning rows or no existing username
    {
       
             $_SESSION['user'] = $username; //set the username in a session. This serves as a global variable
             header("location: login.php"); // redirects the user to the authenticated home page
         
    }
    else
    {
        Print '<script>alert("Incorrect username or password!");</script>'; // Prompts the user
        Print '<script>window.location.assign("index.html");</script>'; // redirects to login.php
    }
?>