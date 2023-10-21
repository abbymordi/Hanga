<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Hanga|buy|sell</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- top Header -->
		

		

	

	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
				<li class="active">Send Email</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<?php
if ( 
              
                (empty($_POST['email'])) 
                
                   
  
            
                   
             
        
        
        
        
        
                     
                        
                     ) 
               {
        
              echo "<h3>Please Enter all fields and  click send </h3>";
           } 
    
       
           
           
           
           
         else {          

if(isset($_POST['submit'])) {


$email =  $_POST['email'];

$body = "Check the email submiited and compare with  pasword";







 
$to = 'hangashopping@gmail.com';
$subject ='Check email';
$message ="$body";

$headers ="REF:".$subject;

$mail= mail($to ,$subject,$message,$headers);
if ($mail) {
    echo"<h3>Email sent successfully! If verified successfully your password will sent to you";
    
}
 else {
    echo "<h3>Email not sent.Something went wrong<h3>";
}




}
         }
?>

        <a button class="primary-btn alert-info" href="index.php"  ><i class="fa fa-bug"></i> Home</ button></a>        
 
	

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>



