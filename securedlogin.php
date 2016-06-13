
<html>
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="signup.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title> library </title>
	
  </head>
<body> 
  <div id="full-page">  
	   <div id="navbar">
	      <ul >
		  
			   <li> <a href ="http://localhost/myweb/logout.php" id="open" onclick="scroll(0,0);"> LOGOUT </a></li>
			   <li> <a href="#pop1-box" id="open1" onclick="scroll(0,0);"> WELCOME </a><li>
			   <li> <a href="#main-content" onClick="scroll(0,600);"> ABOUT US</a></li>
			   <li>  <a href ="#" onClick="scroll(0,2000);"> CONTACTS  </a></li>
			
		  </ul>
	
	   </div>

       <div id="your-menu"> 	
           <div class="row">
	           <div class="col-sm-10" style=" background-image : url('elegantblue.jpg'); height : 240px ; position : relative ;">
                      <h1 style= "padding-left : 150px; color : #ffffff ;"   > YOU HAVE SUCCESSFULLY LOGGED IN !!!!! </h1>
					     <br>
	                      <?php 
						 include 'connect.php';
						// $username = $_POST['username'];
						 //$password = $_POST['password'];
						 $query  = "SELECT * FROM signup where username='$username' and password='$password' ";
                         $result = mysql_query($query) or die(mysql_error()) ;	  
						 $num_rows = mysql_num_rows($result);
						 
                         //$query = mysql_query("SELECT * FROM signup ") or die(mysql_error());
                         //$result = mysql_fetch_array($query) or die(mysql_error()); 
						 
						 
						 while($row = mysql_fetch_array($result, MYSQL_ASSOC))
                         {   $enrolmentno = $row['ENROLMENTNO'] ;
					       
					        echo "<span class='style-myecho' >"."NAME :- ".'&nbsp'.$row['FNAME']."</span>" ;
							echo "<span class='style1-myecho' >".$row['LNAME']."</span>" ;
							
							
							echo '<br>';
							echo "<span class='style-myecho' >"."USERNAME:- ".'&nbsp'.$row['USERNAME']."</span>";
							echo '<br>';
							echo "<span class='style-myecho' >"."ENROLMENTNO :- ".'&nbsp'.$row['ENROLMENTNO']."</span>";
							echo '<br>';
						 } 
                         
                         ?>
						 
               </div>
	           <div class="col-sm-2" style="background-image : url('elegantblue.jpg') ; height : 240px ; margin : 0; padding :0 ;">
			           <a href="#" ><img src="myphoto.jpg" id="myphoto" title="upload your photo "></a>
			   </div>
           </div>
           <div class="main-section">
		       <div id="my-account" >
			        <br>
			         <?php 
					 $sno = 1;
					 $fine = 0;
					 $query = "SELECT * FROM bookbank where enrolmentno = '$enrolmentno' ";
					 $result = mysql_query($query) or die(mysql_error());
					 $num_rows = mysql_num_rows($result);
						 
                         //$query = mysql_query("SELECT * FROM signup ") or die(mysql_error());
                         //$result = mysql_fetch_array($query) or die(mysql_error()); 
						 if($num_rows == 0)
						 {
							 echo "<span class='style2-myecho' >"." ***  you have not issued any books from library ***"."</span>";
						 }	
						 else {
					 echo'<table border="1" ><th>S.NO</th><th >BOOK_ID</th><th>BOOK_Name</th><th>BOOK_AUTHOR</th><th>ISSUE_DATE</th><th>RETURN_DATE</th><th>FINE</th>';
					 while($res = mysql_fetch_array($result, MYSQL_ASSOC))
					 {   $fine = $fine + $res['FINE'] ;
						 echo '<tr><td>'.$res['S_NO'].' </td><td>'.$res['book_id'].'</td><td>'.$res['BOOKNAME'].'</td><td>'.$res['BOOKAUTHOR'].'</td><td>'.$res['ISSUEDATE'].'</td><td>'.$res['RETURNDATE'].'</td><td>'.$res['FINE'].'</td></tr>';
					      $sno++; 
					}	 
						 }  
					 echo '</table';
					 
					?>	
			        
					
				   		 
			   </div>
			    <div id="myfine">
			      <p style = "font-size : 50px ; padding-left : 200px ;">TOTAL FINE : <?php echo $fine ?>  </p>
				 </div>
				 <div id="my-query">
				 <br>
				 
				 <h2> DO YOU HAVE ANY QUERY ?? MESSAGE US . </h2>  
				 <br><br>
				     <form   method="post" style = " padding-left: 10px;" action= "http://localhost/myweb/signup.php" >
		 <h2>ENROLLMENT NO   </h2>
         <input type="text" name="enrolmentno" style=" border : 2px solid #33CCFF ;  background-color : #ffffffff ; width : 600px ; margin-left : 200px; height : 60px; font-size : 20px ;">
        
         <h2>SUBJECT  </h2>
         <input type="text" name="fname" style=" border : 2px solid #33CCFF ;  background-color : #ffffffff ; width : 600px ;margin-left : 200px ; height : 60px; font-size : 20px ;">
        
        <h2>MESSAGE </h2>
        <TEXTAREA type="text" name="lname" style="border : 2px solid #33CCFF;   background-color : #ffffff; width : 600px ;margin-left : 200px; height : 160px; font-size : 20px; text-align : top ; "></TEXTAREA>
		<br>
		<br>
		<input type="submit" value="submit" id=""style="border : 2px solid blue ;  width : 600px ; height : 60px; margin-left : 200px; background-color:#33CCFF;  font-size : 25px; padding-top: 1px; padding-bottom: 1px; padding-left: 1px;">
		<br>
				</form>       
				 </div>
				 
           </div>
           <div class="footer" id="foot">

   
     




     </div>		   
		</div>
  </div>
  
  
</body>