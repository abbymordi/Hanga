<?php
      
      

require_once( "common.inc.php" );
require_once( "config.php" );
require_once( "member.class2.php" );
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
        <meta name="keywords" content="hanga,hanga.co.za,make money fast,gumtree clothes,sell old clothes,clothes,fashion,buying clothes online,selling clothes online,online fashion,South Africa online shop,Online shop for clothes ">
       <meta name="description" content="Hanga is an free online shop for buying and selling  of clothing items for all in South Africa.">
	<title>HANGA|BUY|SELL|WEAR IT</title>

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
		<div id="top-header">
			<div class="container">
				
				
			</div>
		</div>
		<!-- /top Header -->

		<!-- header -->
		<div id="header">
			<div class="container">
				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo">
                                            <a class="logo" href="index.php">
							<img src="./img/logo.png" alt="">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Search -->
					<div class="header-search">
						<form  action="search.php" method="post" >
							<input class="input search-input" name="search" id="search" type="text" placeholder="What are you looking for?">
							
							<button class="search-btn" type="submit" name="submitSearch" id="submitSearch" value="submitSearch" ><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- /Search -->
				</div>
                 
                            
                            
                            
                            
                            
                            
				<div class="pull-right">
					<ul class="header-btns">
						<!-- Account -->
						 <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img src="./profiles/<?php echo $_SESSION["member"]->getValue( "profile" ) ?>" width="75px" height="84px" style="border:1px solid #333333;" alt="">
                            </span>
                            <span class="username"><?php echo $_SESSION["member"]->getValue( "firstName" ) ?> </span>
                            <b class="caret"></b>
                        </a>
    <?php             
$start = isset( $_GET["start"] ) ? (int)$_GET["start"] : 0;
$order = isset( $_GET["order"] ) ? preg_replace( "/[^a-zA-Z]/", "", 
$_GET["order"] ) : "joinDate";
list( $members, $totalRows ) = Member::getMembers( $start, 5, 
$order );

             

$rowCount = 0;
             
foreach ( $members as $member ) {
  $rowCount++;



?>                      
              
              
              
              
              
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
               
              </li>
               <li>
                   <a href="changepass.php"><i class="icon_key_alt"></i> Change password</a>
              </li>
              <li>
                  <a href="editprofile.php?memberId= <?php echo $member->getValueEncoded( "id" ) ?>&amp;start= <?php echo $start ?>&amp;order= <?php echo 
$order ?> ">  Edit profile  </a><i class="icon_clock_alt"></i></a>
              </li>
              
              <li>
                  <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              
            </ul>
          </li>
						<!-- /Account -->
      <?php
}
//}
?> 		   
                                                
                                                
                                                
						<!-- Cart -->
						<li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								
								
							</div>
							<a button class="primary-btn add-to-cart" href="post.php"  ><i class="fa fa-eye"></i> POST AD </ button></a>
							
						</li>
						<!-- /Cart -->
                                                   
						<!-- Mobile nav toggle-->
						<li class="nav-toggle">


							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>

                                                            
						</li>
						<!-- / Mobile nav toggle -->
					</ul>
				</div>
			</div>
			<!-- header -->
		</div>
		<!-- container -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<div id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">
				
				<!-- /category nav -->

				<!-- menu nav -->
				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						<li class="dropdown mega-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">MEN<i class="fa fa-male"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												
											<li><a href="#">shirts</a></li>
											<li><a href="#">shorts</a></li>
											<li><a href="#">pants</a></li>
											<li><a href="#">Jeans</a></li>
											<li><a href="#">active wear</a></li>
                                                                                        <li><a href="#">swimwear</a></li>
                                                                                        
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
											<li>
											<li><a href="#">jackets</a></li>
											<li><a href="#">outerwear</a></li>
											<li><a href="#">sleepwear</a></li>
											<li><a href="#">sweatshirts</a></li>
											<li><a href="#">hoodies</a></li>
                                                                                        <li><a href="#">shoes</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									
								</div>
								<div class="row hidden-sm hidden-xs">
									<div class="col-md-12">
										<hr>
										<a class="banner banner-1" href="#">
											<img src="./img/men.jpg" alt="">
											<div class="banner-caption text-center">
												
											</div>
										</a>
									</div>
								</div>
							</div>
						</li>
						<li class="dropdown mega-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">WOMEN<i class="fa fa-female"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												
                                                                                        <li><a href="women.php">Tops</a></li>
                                                                                        <li><a href="women.php">shorts</a></li>
                                                                                        <li><a href="women.php">pants</a></li>
                                                                                        <li><a href="women.php">Jeans</a></li>
                                                                                        <li><a href="women.php">active wear</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												
                                                                                        <li><a href="women.php">dresses</a></li>
                                                                                        <li><a href="women.php">swimwear</a></li>
                                                                                        <li><a href="women.php">sleepwear</a></li>
                                                                                        <li><a href="women.php">sweatshirts</a></li>
                                                                                        <li><a href="women.php">hoodies</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												
                                                                                        <li><a href="women.php">jackets</a></li>
                                                                                        <li><a href="women.php">outerwear</a></li>
                                                                                        <li><a href="women.php">shoes</a></li>
											
                                                                                        <li><a href="women.php">skirts</a></li>
										</ul>
									</div>
								</div>
								<div class="row hidden-sm hidden-xs">
									<div class="col-md-12">
										<hr>
										<a class="banner banner-1" href="#">
											<img src="./img/banner05.jpg" alt="">
											<div class="banner-caption text-center">
												
											</div>
										</a>
									</div>
								</div>
							</div>
						</li>
						
						 <li class="dropdown mega-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">KIDS<i class="fa fa-male"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
                                                                                        <li><a href="kids.php">tops</a></li>
                                                                                        <li><a href="kids.php">shorts</a></li>	
                                                                                        <li><a href="kids.php">shirts</a></li>
                                                                                        <li><a href="kids.php">skirts</a></li>
                                                                                        <li><a href="kids.php">pants</a></li>
                                                                                        <li><a href="kids.php">Jeans</a></li>
                                                                                        <li><a href="kids.php">Active wear</a></li>
										</ul>
                                                                               </div>
										<div class="col-md-4">
										<ul class="list-links">
											<li>
												
                                                                                        <li><a href="kids.php">jackets</a></li>
                                                                                        <li><a href="kids.php">outerwear</a></li>
                                                                                        <li><a href="kids.php">dresses</a></li>
											
											
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									</div>
									<div class="row hidden-sm hidden-xs">
									<div class="col-md-12">
										<hr>
										<a class="banner banner-1" href="#">
											<img src="./img/kids.jpg" alt="">
											<div class="banner-caption text-center">
												
											</div>
										</a>
									</div>
								</div>
							</div>
						</li>

						 <li class="dropdown mega-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">SHOES<i class="fa fa-male"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												
                                                                                        <li><a href="shoes.php">sneakers</a></li>
                                                                                        <li><a href="shoes.php">boots</a></li>
                                                                                        <li><a href="shoes.php">sandals</a></li>
                                                                                        <li><a href="shoes.php">heels</a></li>
											
										</ul>
                                                                               </div>
										<div class="col-md-4">
										<ul class="list-links">
											<li>
												
                                                                                        <li><a href="shoes.php">wedges</a></li>
                                                                                        <li><a href="shoes.php">outerwear</a></li>
											
											
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									</div>
									<div class="row hidden-sm hidden-xs">
									<div class="col-md-12">
										<hr>
										<a class="banner banner-1" href="#">
											<img src="./img/shoes.jpg" alt="">
											<div class="banner-caption text-center">
												
											</div>
										</a>
									</div>
								</div>
							</div>
						</li>
                     
						<li class="dropdown mega-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Jewelry & Watches <i class="fa fa-diamond"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												
                                                                                        <li><a href="jewellery.php">women's jewellery</a></li>
                                                                                        <li><a href="jewellery.php">Men’s jewellery</a></li>
                                                                                        <li><a href="jewellery.php">men's watches</a></li>
                                                                                        <li><a href="jewellery.php">women's watchn</a></li>
											
										</ul>
										
										
									</div>

                                                                       <div class="row hidden-sm hidden-xs">
									<div class="col-md-12">
										<hr>
										<a class="banner banner-1" href="#">
											<img src="./img/jewellery.jpg" alt="">
											<div class="banner-caption text-center">
												
											</div>
										</a>
									</div>


								</div>
							</div>
						</li>
                                     <li class="dropdown mega-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Acccessories<i class="fa fa-diamond"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												
                                                                                        <li><a href="accessories.php">bags</a></li>
                                                                                        <li><a href="accessories.php">belts</a></li>
                                                                                        <li><a href="accessories.php">hats</a></li>
                                                                                        <li><a href="accessories.php">scarves</a></li>
                                                                                        <li><a href="accessories.php">glasses</a></li>
											
											
										</ul>
										
										
									</div>

                                                                        <div class="row hidden-sm hidden-xs">
									<div class="col-md-12">
										<hr>
										<a class="banner banner-1" href="#">
											<img src="./img/bags.jpg" alt="">
											<div class="banner-caption text-center">
												
											</div>
										</a>
									</div>

								</div>
							</div>
						</li>           
                                          <li class=dropdown mega-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Other<i class="fa fa-diamond"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												
                                                                                        <li><a href="user.php">bags</a></li>
                                                                                        <li><a href="user.php">belts</a></li>
                                                                                        <li><a href="user.php">hats</a></li>
                                                                                        <li><a href="user.php">scarves</a></li>
                                                                                        <li><a href="user.php">glasses</a></li>
											
											
										</ul>
										
										
									</div>

                                                                        <div class="row hidden-sm hidden-xs">
									<div class="col-md-12">
										<hr>
										<a class="banner banner-1" href="#">
											<img src="./img/jewellery.jpg" alt="">
											<div class="banner-caption text-center">
												
											</div>
										</a>
									</div>

								</div>
							</div>
						</li>      
                                                
                                                
                                                
					</ul>
				</div>
				<!-- menu nav -->
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->

	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
				<li class="active">Products</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- ASIDE -->
				<div id="aside" class="col-md-3">
					<!-- aside widget -->
					<div class="aside">
						<h3 class="aside-title">Shop by:</h3>
						

						<ul class="filter-list">
							<li><span class="text-uppercase">Price:</span></li>
                                                        <li><a href="less100.php">MAX: R100.00</a></li>
							
						</ul>

						

					
					</div>
					
					<div class="aside">
						<h3 class="aside-title">Filter by Gender</h3>
						<ul class="list-links">
                                                    <li class="active"><a href="women.php">Women</a></li>
                                                    <li><a href="men.php">Men</a></li>
                                                    <li><a href="kids.php">kids</a></li>
                                                    <li><a href="accessories.php">accessories</a></li>
                                                    <li><a href="shoes.php">shoes</a></li> 
           




						</ul>
					</div>
					<!-- /aside widget -->

					<!-- aside widget -->
					<div class="aside">
						<h3 class="aside-title">Filter By Location</h3>
						<ul class="list-links">
                                                    <li class="active"><a href="gauteng.php">Gauteng</a></li>
                                                    <li><a href="kzn.php">KZN</a></li>
                                                    <li><a href="northwest.php">North West</a></li>
                                                    <li><a href="easterncape.php">Eastern Cape</a></li>
                                                    <li><a href="limpopo.php">Limpopo</a></li> 
                                                    <li><a href="mphumalanga.php">Mphumalanga</a></li>
                                                    <li><a href="freestate.php">Free State </a></li>
                                                    <li><a href="northerncape.php">Northern Cape</a></li> 
                                                    <li><a href="westerncape.php">Wesern Cape</a></li>



						</ul>
					</div>
					<!-- /aside widget -->
				</div>
				<!-- /ASIDE -->

				<!-- MAIN -->
				<div id="main" class="col-md-9">
					<!-- store top filter -->
					<div class="store-filter clearfix">
						
						<div class="pull-right">
							
							<ul class="store-pages">
								<li><span class="text-uppercase">Page:</span></li>
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- /store top filter -->
<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">

<!-- row -->
			<div class="row">
				<!-- section-title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Latest Offers</h2>
						<div class="pull-right">
							<div class="product-slick-dots-1 custom-dots"></div>
						</div>
					</div>
				</div>
				<!-- /section-title -->

				<!-- banner -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="banner banner-2">
						<img src="./img/banner04.png" alt="">
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
							
<?php             
$start = isset( $_GET["start"] ) ? (int)$_GET["start"] : 0;
$order = isset( $_GET["order"] ) ? preg_replace( "/[^a-zA-Z]/", "", 
$_GET["order"] ) : "postedDate";

list( $products1, $totalRows ) = Product1::getLimpopo( $start, 5, 
$order );


//displayPageHeader( "A look @ students" );
             


$rowCount = 0;
             
foreach ( $products1 as $product1 ) {
  $rowCount++;
?>      							<!-- /Product Single -->
                                                   
                                                     
                                                        
                                                        
                                                        
                                                        
							<!-- Product Single -->
							<div class="product product-single">
								<div class="product-thumb">
									<div class="product-label">
										<span><?php echo $product1->getValueEncoded( "productName" ) ?></span>
										<span class="sale"> <?php echo $product1->getValueEncoded( "category" ) ?></span>
									</div>
									
									<button class="main-btn quick-view"><i class="fa fa-search-plus"></i>  <?php echo $product1-> getValueEncoded( "productDesc" ) ?></button>
                                                                        <img src="./uploads/<?php echo $product1->getValueEncoded( "mainPic" ) ?>" width="314px" height="393px" style="border:1px solid #333333; " alt="">
								</div>
								<div class="product-body">
                                                                    <h3 class="product-price">R<?php echo $product1->getValueEncoded( "price" ) ?></h3><br>
									<p class="product-price"><b>Item code:</b> <?php echo $product1->getValueEncoded( "province" ) ?>   [<?php echo $product1->getValueEncoded( "city" ) ?>]</p>
                                                                        <p class="product-price"><b>Item code:</b> <?php echo $product1->getValueEncoded( "productCode" ) ?></p>
                                                                        <h2 class="product-name">Seller:  <a href=""><i class="fa fa-user-circle"></i>  <a href="profile.php?sellerId= <?php echo $product1->getValueEncoded( "sellerId" ) ?>&amp;start= <?php echo $start ?>&amp;order= <?php echo 
$order ?> "> <?php echo $product1->getValueEncoded( "name" ) ?>  </a></h2>
									<div class="product-btns">
								
                                                                <a button class="primary-btn add-to-cart" href="productdetails.php?productCode=<?php echo $product1->getValueEncoded( "productCode" ) ?>&amp;start= <?php echo $start ?>&amp;order= <?php echo 
$order ?> "> <?php echo $product1->getValueEncoded( "productName" ) ?>  ||  <i class="fa fa-shopping-cart"></i> buy / view</ button></a>
                                                                        </div>
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
	

					<!-- store bottom filter -->
					<div class="store-filter clearfix">
						<div class="pull-left">
							<div class="row-filter">
								<a href="#"><i class="fa fa-th-large"></i></a>
								<a href="#" class="active"><i class="fa fa-bars"></i></a>
							</div>
							
						</div>
						<div class="pull-right">
							
							<ul class="store-pages">
								<li><span class="text-uppercase">Page:</span></li>
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- /store bottom filter -->
				</div>
				<!-- /MAIN -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
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
							<li><a href="https://facebook.com/pg/hangashopping">facebook  <i class="fa fa-facebook"></i></a></li>
							
							<li><a href="https://instagram.com/hangashopping">instagram  <i class="fa fa-instagram"></i></a></li>
							
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
                                        <p>developed by Trevor Chapwanya[0785180234]</p>
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


