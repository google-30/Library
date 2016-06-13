
<?php

include 'connect.php';
$enrolmentno=mysql_real_escape_string($_POST['enrolmentno']);
 $fname=mysql_real_escape_string($_POST['fname']);
$lname=mysql_real_escape_string($_POST['lname']);
$email=mysql_real_escape_string($_POST['email']);
$username=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string($_POST['password']);
 $bool =  true ;
 $query = "SELECT * FROM signup"
 while($row = mysql_fetch_array($query))
 {
	 $table_users = $row['enrolmentno'];
	 if($enrolmentno == $table_users )
	 {
		 $bool = false ;
		 Print '<script> alert('USER ALREADY EXIST ');</script>';
		 Print '<script> window.location.assign("index.html");</script>'; 
	 }	 
 }
 if($bool)
 {
	 
    $main_query = "INSERT INTO signup( enrolmentno,fname,lname,email,username,password)VALUES('$enrolmentno','$fname','$lname','$email','$username','$password')"; 
     $result = mysql_query($query); 
     if($result) 
               { 
		       echo "Successfully updated database"; 
			   } 
     else 
              { 
		      die('Error: '.mysql_error($con)); 
               } 
 mysql_close($con);

 }
 ?>