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

	<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="bootstrap/themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="bootstrap/themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="bootstrap/themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="bootstrap/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="bootstrap/themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="bootstrap/themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="bootstrap/themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="bootstrap/themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="bootstrap/themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>

</head>

<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	
<!-- Sidebar end=============================================== -->
	<div class="span11">
    <ul class="breadcrumb">
        <li><a href="user.php">Main</a> <span class="divider"></span></li>
   
    <li class="active">Seller Profile</li>
    
    </ul>
        <?php
          
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


  ?>               
            
    
	<div class="row">	  
			<div id="gallery" class="span3">
           
                    
					<a class="banner banner-1" href="#">
                                           <img src="./profiles/<?php echo $_SESSION["member"]->getValue( "profile" ) ?>" width="75px" height="84px" style="border:1px solid #333333;" alt="">
						
					</a>
                          <div class="btn-toolbar">
			  <div class="btn-group">
                              <a href="contactSeller.php?sellerId= <?php echo $product1->getValueEncoded( "sellerId" ) ?>" ><span class="btn"><i class="icon-envelope"></i></span></a>
				<span class="btn" ><i class="icon-phone"></i></span>
				
				
				
			  </div>
			</div>
                         
                          
			 
			</div>   
        
            
            
            
                        </div> 
        
        
        
				  
                        
			</div>
            			</div>

    
            
            
            
            
            
			<div class="span6">
				<h3><?php echo $product1->getValueEncoded( "name" ) ?> <?php echo $product1->getValueEncoded( "lastName" ) ?> </h3>
				<hr class="soft clr"/>
				<p>
				 <?php echo $product1->getValueEncoded( "bio" ) ?>  
				</p>
				
				<br class="clr"/>
			<a href="#" name="detail"></a>
			<hr class="soft"/>
				
				
			</div>
<div class="span9">
          
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade active in" id="home">
			  <h4>Personal Info</h4>
               
					<table class="shopping-cart-table table">			
								
								<tfoot>
									<tr>
                                                                           
										<th class="empty" colspan="3"></th>
										<th>Location: </th>
										<th colspan="2" class="total"><?php echo $product1->getValueEncoded( "province" ) ?></th>
									
                                                                        <tr>
										<th class="empty" colspan="3"></th>
										<th>City</th>
										<th colspan="2" class="total"><?php echo $product1->getValueEncoded( "city" ) ?></th>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>email:</th>
										<th colspan="2" class="total"><?php echo $product1->getValueEncoded( "email" ) ?></th>
									</tr>
                                                                        <tr>
										<th class="empty" colspan="3"></th>
										<th>cell number:</th>
										<th colspan="2" class="total"> <?php echo $product1->getValueEncoded( "phone" ) ?></th>
									</tr>
                                                                        
                                                                        
								</tfoot>
							</table>
				
              </div>
         </div>
    </div>
      </div>   
	 </div>
	 </div>
	 </div>
        
        
      <!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">

<!-- row -->
			<div class="row">
				<!-- section-title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">My Items </h2>
						<div class="pull-right">
							<div class="product-slick-dots-1 custom-dots"></div>
						</div>
					</div>
				</div>
				<!-- /section-title -->
                               <!-- banner -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="banner banner-2">
						<img src="./img/banner14.jpg" alt="">
						<div class="banner-caption">
							<h2 class="white-color">NEW<br>COLLECTION</h2>
							<button class="primary-btn">Slide Pictures</button>
						</div>
					</div>
				</div>
				<!-- /banner -->
				

				<!-- Product Slick -->
				<div class="col-md-9 col-sm-6 col-xs-6">
                                   
					<div class="row">
					 <div id="product-slick-1" class="product-slick">	
							<!-- Product Single -->
							
							<!-- /Product Single -->
<?php  


  
  $userproducts = Product1::getUserProducts( $product1->getValue( "sellerId" ) );

          



//displayPageHeader( "A look @ students" );
             
$rowCount = 0;
          
foreach ( $userproducts as $product1 ) {
  $rowCount++;
?> 
                                                        
                                                     
                                                        
                                                        
                                                        
                                                        
							<!-- Product Single -->
							<div class="product product-single">
								<div class="product-thumb">
									<div class="product-label">
										<span><?php echo $product1->getValueEncoded( "productName" ) ?></span>
										<span class="sale"> <?php echo $product1->getValueEncoded( "category" ) ?></span>
									</div>
									
									<button class="main-btn quick-view"><i class="fa fa-search-plus"></i>  <?php echo $product1-> getValueEncoded( "productDesc" ) ?></button>
									<img src="./uploads/<?php echo $product1->getValueEncoded( "mainPic" ) ?>" width="314px" height="393px" style="border:1px solid #333333;"     alt="">
								</div>
								<div class="product-body">
									<h3 class="product-price">R<?php echo $product1->getValueEncoded( "price" ) ?></h3>
									<p class="product-price"><b>Posted on:</b>  <?php echo $product1->getValueEncoded( "postedDate" ) ?></p>
                                                                        <p class="product-price"><b>Item code:</b> <?php echo $product1->getValueEncoded( "productCode" ) ?></p>
                                                                       
									<div class="product-btns">
								
                                                                  <a button class="primary-btn add-to-cart" href="productdetails.php?productCode=<?php echo $product1->getValueEncoded( "productCode" ) ?>&amp;start= <?php echo $start ?>&amp;order= <?php echo 
$order ?> "> <?php echo $product1->getValueEncoded( "productName" ) ?>  ||  <i class="fa fa-shopping-cart"></i> buy / view</ button></a>
								</div>
							</div>
							<!-- /Product Single -->

							<!-- Product Single -->
           <?php
}
//}
?> 			









                           </div>
						
					</div>
				</div>
				<!-- /Product Slick -->
			</div>


		
        
        
        

	

	

	
	







			
			
			
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- FOOTER -->
	<footer id="footer" class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<!-- footer logo -->
						<div class="footer-logo">
							<a class="logo" href="#">
		            <img src="./img/logo.png" alt="">
		          </a>
						</div>
						<!-- /footer logo -->

						
						<!-- /footer social -->
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">INFORMATION</h3>
						<ul class="list-links">
							<li><a href="faq.html">FAQ</a></li>
							
							<li><a href="privatepolicy.html">PRIVACY</a></li>
							<li><a href="termsandconditions.html">TERM & CONDITIONS</a></li>
							<li><a href="copyright.html">COPYRIGHT</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<div class="clearfix visible-sm visible-xs"></div>

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">SOCIAL MEDIA</h3>
						<ul class="list-links">
							<li><a href="facebook.com/hangashopping">facebook  <i class="fa fa-facebook"></i></a></li>
							
							<li><a href="instagram.com/hangashopping">instagram  <i class="fa fa-instagram"></i></a></li>
							
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer subscribe -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					
					<div class="footer">
						<h3 class="footer-header">CONTACT US</h3>
						<ul class="list-links">
							<li><a href="#">TEL</a><strong>   011 234 0901</strong></li>
							
							<li><a href="#">EMAIL</a>:<strong>  hangashopping@gmail.com</strong></li>
							
						</ul>
					</div>
				</div>
				<!-- /footer subscribe -->
			</div>
			<!-- /row -->
			<hr>
			<!-- row -->
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- footer copyright -->
					<div class="footer-copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  <i class="" aria-hidden="true"></i> @ <a href="https://hanga.com" target="_blank">HANGA</a>
						
					</div>
					<!-- /footer copyright -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>


