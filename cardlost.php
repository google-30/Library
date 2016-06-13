<html>
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="cardlost.css">

    <title> mycard </title>
	
  </head>
 <body> 
<?php
  include 'connect.php';
   $enrolno = $_POST['enrolmentno'];
   $query = "SELECT * FROM lostcard WHERE enrolno = '$enrolno' "   ;
   $result = mysql_query($query) or die(mysql_error()) ;	
   $num_rows = mysql_num_rows($result);
?>
<div id="nav" >
   
 <h1><a href="html.html" style="decoration : none ;"> GOOD MORNING !!! </a></h1>
 </div>
 <div id="mycard">
<?php  
   if($num_rows >= 1)
   {
	   while($row = mysql_fetch_array($result, MYSQL_ASSOC))
                         {  // $enrolmentno = $row['ENROLMENTNO'] ;
					         
					        echo  "<br><span class='text1' >".'HELLO MR.'."</span> " ;
							
					        echo "<span class='text1'>".$row['enrolno']."</span>" ;
							echo "<br><br>" ;
							echo "<span class='text' > YOUR CARD IS IN LIBRARY TAKE IT FROM THERE ASAP !!!  </span><br><br>" ;
	   
							echo "<span class= 'image' >".'<a href="#"><img src="data:image/jpeg;base64,'.base64_encode( $row['cardimage'] ).'" width="350px" height="230px"  /></a>'."</span>";
						 } 
	   
	   
	   
	   
	   
	   
   }
   else 
   {
	   echo "<h1 id='hello'>  Sorry , We dont have your card . please wait for sometime or apply for new card !!!!! </h1>" ;
	   
	   echo "<img src='dontknow.jpg' id='question'/> ";
	   
	   
   }  
   
?>
  <br>
    <h1 style=" font-size : 45px ; color : #002699 ;"> I think you are very careless person :)  Please be responsible and take care of your card .!!</h1> 
</div>
</body>
</html>