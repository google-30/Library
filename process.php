<html>
<head> 

<title> login </title>

</head>
<body>

<h1 style=" color : red; padding-left : 200px ; padding-top : 100px ; font-size : 90px ;"> thank you !!! <h1>
<?php 
 $fname = $lname = $email = "";
 $fname = $_POST["fname"];
 $lname = $_POST["lname"];
 $email = $_POST["email"];
 

 echo $fname;
 echo $lname;
 echo $email;
 


?>


</body>


</html>