
 


<?php
             
require_once( "common.inc.php" );
require_once( "config.php" );
//require_once( "member.class2.php" );
require_once( "product1.class2.php" );


checkLogin();

?>   




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>E-SHOP HTML Template</title>

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
				<li class="active">Contact Seller</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<?php
if ( 
               (empty($_POST['name'])) ||
                 
                   
             
              
               
                   
               (empty($_POST['subject'])) ||
                (empty($_POST['msg'])) 
                
                   
  
            
                   
             
        
        
        
        
        
                     
                        
                     ) 
               {
        
              echo "<h3>Please Enter all fields and  click send </h3>";
           } 
    
         require_once( "common.inc.php" );
require_once( "config.php" );
//require_once( "member.class2.php" );
require_once( "LogEntry.class.php" );
require_once( "product1.class2.php" );

$sellerId = isset( $_REQUEST["sellerId"] ) ? (int)$_REQUEST["sellerId"] : 0;
          
if ( !$product1 = Product1::getSeller( $sellerId ) ) {
  displayPageHeader( "Error" );
  echo " <div> Member not found. </div> ";
  displayPageFooter();
  exit;
}      

           
           
           
           
         else {          

if(isset($_POST['submit'])) {

$name = $_POST['name'];
$phonenumber = $_POST['number'];
$email = $_SESSION["member"]->getValue( "email" );
$subject= $_POST['subject'];
$body = $_POST['msg'];



}



$receiver = $product1->getValueEncoded( "name" ); 
$to = $product1->getValueEncoded( "email" );

$message ="$body";

$headers ="REF:".$subject;

$mail= mail($to ,$subject,$message,$headers);
if ($mail) {
    echo"<h3>Email sent successfully! to ".$receiver."  Thank you"."".$name.",Any replies will be found on your email from  ".$receiver."<h3>";
    
}
 else {
    echo "<h3>Email not sent.Something went wrong<h3>";
}





         }
?>

 <a button class="primary-btn alert-info" href="user.php"  ><i class="fa fa-bug"></i> User Page</ button></a>        
 
	

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>


