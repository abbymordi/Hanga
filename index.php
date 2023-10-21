<?php
             
require_once( "common.inc.php" );
require_once( "config.php" );
//require_once( "member.class2.php" );
require_once( "product1.class2.php" );
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


</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- top Header -->
		<div id="top-header">
			<div class="container">
				
				<div class="pull-right">
					
				</div>
			</div>
		</div>
		<!-- /top Header -->

		<!-- header -->
		<div id="header">
			<div class="container">
				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo">
						<a class="logo" href="index.html">
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
						<li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-user-o"></i>
								</div>
								<strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
							</div>
							<a href="login.php"  class="text-uppercase">Login</a> / <a href="register.php"  class="text-uppercase">Join</a>
							
						</li>
						<!-- /Account -->
                                                    <li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								
								
							</div>
                                                       <a button class="primary-btn add-to-cart" href="post.php"  ><i class="fa fa-shopping-cart"></i> START SELLING NOW</ button></a>
                                                        
                                                        
                                                        
							
						</li>
						

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
				<!-- category nav -->
				<div class="category-nav">
					<span class="category-header">Categories <i class="fa fa-list"></i></span>
					<ul class="category-list">
						<li class="dropdown side-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">WOMEN<i class="fa fa-female"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												
                                                                                        <li><a href="login.php">Tops</a></li>
                                                                                        <li><a href="login.php">shorts</a></li>
                                                                                        <li><a href="login.php">pants</a></li>
                                                                                        <li><a href="login.php">Jeans</a></li>
                                                                                        <li><a href="login.php">active wear</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												
                                                                                        <li><a href="login.php">dresses</a></li>
                                                                                        <li><a href="login.php">swimwear</a></li>
                                                                                        <li><a href="login.php">sleepwear</a></li>
                                                                                        <li><a href="login.php">sweatshirts</a></li>
                                                                                        <li><a href="login.php">hoodies</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												
                                                                                        <li><a href="login.php">jackets</a></li>
                                                                                        <li><a href="login.php">outerwear</a></li>
                                                                                        <li><a href="login.php">shoes</a></li>
											
                                                                                        <li><a href="login.php">skirts</a></li>
										</ul>
									</div>
								</div>
								<div class="row hidden-sm hidden-xs">
									<div class="col-md-12">
										<hr>
										<a class="banner banner-1" href="#">
											<img src="./img/women.jpg" alt="">
											<div class="banner-caption text-center">
												
											</div>
										</a>
									</div>
								</div>
							</div>
						</li>
						
						<li class="dropdown side-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">MEN<i class="fa fa-male"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												
                                                                                        <li><a href="login.php">shirts</a></li>
                                                                                        <li><a href="login.php">shorts</a></li>
                                                                                        <li><a href="login.php">pants</a></li>
                                                                                        <li><a href="login.php">Jeans</a></li>
                                                                                        <li><a href="login.php">active wear</a></li>
                                                                                        <li><a href="login.php">swimwear</a></li>
                                                                                        
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
											<li>
                                                                                        <li><a href="login.php">jackets</a></li>
                                                                                        <li><a href="login.php">outerwear</a></li>
                                                                                        <li><a href="login.php">sleepwear</a></li>
                                                                                        <li><a href="login.php">sweatshirts</a></li>
                                                                                        <li><a href="login.php">hoodies</a></li>
                                                                                        <li><a href="login.php">shoes</a></li>
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
						 
                                             <li class="dropdown side-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">KIDS<i class="fa fa-male"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
                                                                                        <li><a href="login.php">tops</a></li>
                                                                                        <li><a href="login.php">shorts</a></li>	
                                                                                        <li><a href="login.php">shirts</a></li>
                                                                                        <li><a href="login.php">skirts</a></li>
                                                                                        <li><a href="login.php">pants</a></li>
                                                                                        <li><a href="login.php">Jeans</a></li>
                                                                                        <li><a href="login.php">Active wear</a></li>
										</ul>
                                                                               </div>
										<div class="col-md-4">
										<ul class="list-links">
											<li>
												
                                                                                        <li><a href="login.php">jackets</a></li>
                                                                                        <li><a href="login.php">outerwear</a></li>
                                                                                        <li><a href="login.php">dresses</a></li>
											
                                                                                        <li><a href="login.php">other</a></li
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

                                                     <li class="dropdown side-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">SHOES<i class="fa fa-male"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												
                                                                                        <li><a href="login.php">sneakers</a></li>
                                                                                        <li><a href="login.php">boots</a></li>
                                                                                        <li><a href="login.php">sandals</a></li>
                                                                                        <li><a href="login.php">heels</a></li>
											
										</ul>
                                                                               </div>
										<div class="col-md-4">
										<ul class="list-links">
											<li>
												
                                                                                        <li><a href="login.php">wedges</a></li>
                                                                                        <li><a href="login.php">outerwear</a></li>
											
                                                                                        <li><a href="login.php">other</a></li
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
                     
						<li class="dropdown side-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Jewelry & Watches <i class="fa fa-diamond"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												
                                                                                        <li><a href="login.php">women's jewellery</a></li>
                                                                                        <li><a href="login.php">Men’s jewellery</a></li>
                                                                                        <li><a href="login.php">men's watches</a></li>
                                                                                        <li><a href="login.php">women's watchn</a></li>
											
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
						<li class="dropdown side-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Acccessories<i class="fa fa-diamond"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												
                                                                                        <li><a href="login.php">bags</a></li>
                                                                                        <li><a href="login.php">belts</a></li>
                                                                                        <li><a href="login.php">hats</a></li>
                                                                                        <li><a href="login.php">scarves</a></li>
                                                                                        <li><a href="login.php">glasses</a></li>
											
											
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
						<li class="dropdown side-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Other<i class="fa fa-diamond"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												
                                                                                        <li><a href="login.php">bags</a></li>
                                                                                        <li><a href="login.php">belts</a></li>
                                                                                        <li><a href="login.php">hats</a></li>
                                                                                        <li><a href="login.php">scarves</a></li>
                                                                                        <li><a href="login.php">glasses</a></li>
											
											
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
				<!-- /category nav -->

				
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->

        
   
        
	<!-- HOME -->
	<div id="home">
		<!-- container -->
		<div class="container">
			<!-- home wrap -->
			<div class="home-wrap">
				<!-- home slick -->
				<div id="home-slick">
					<!-- banner -->
					<div class="banner banner-1">
						<img src="./img/banner01.jpg" alt="">
						<div class="banner-caption text-center">
							<h1></h1>
							<h3 class="white-color font-weak"></h3>
							<!--<button class="primary-btn"></button>-->
						</div>
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img src="./img/banner02.jpg" alt="">
						<div class="banner-caption">
							<h1 class="primary-color"><br><span class="white-color font-weak"></span></h1>
							<!--<button class="primary-btn"></button>-->
						</div>
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img src="./img/banner03.jpg" alt="">
						<div class="banner-caption">
							<h1 class="white-color"> <span></span></h1>
							<!--<button class="primary-btn"></button>-->
						</div>
					</div>
					<!-- /banner -->
				</div>
				<!-- /home slick -->
			</div>
			<!-- /home wrap -->
		</div>
		<!-- /container -->
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
$start = isset( $_GET["start"] ) ? (int)$_GET["start"] : 0;
$order = isset( $_GET["order"] ) ? preg_replace( "/[^a-zA-Z]/", "", 
$_GET["order"] ) : "postedDate";

list( $products1, $totalRows ) = Product1::getProducts1( $start, 5, 
$order );


//displayPageHeader( "A look @ students" );
             
?> 
<?php
$rowCount = 0;
             
foreach ( $products1 as $product1 ) {
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
                                                                        <img src="./uploads/<?php echo $product1->getValueEncoded( "mainPic" ) ?>" width="314px" height="393px" style="border:1px solid #333333; " alt="">
								</div>
								<div class="product-body">
                                                                    <h3 class="product-price">R<?php echo $product1->getValueEncoded( "price" ) ?></h3><br>
                                                                    <p class="product-price"><b>Location:</b> <?php echo $product1->getValueEncoded( "province" ) ?>   [<?php echo $product1->getValueEncoded( "city" ) ?>]</p>
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




</div>
				<!-- /Product Slick -->
 </div>




				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">TOP PICKS</h2>
						<div class="pull-right">
							<div class="product-slick-dots-2 custom-dots">
							</div>
						</div>
					</div>
				</div>
				<!-- section title -->

				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single product-hot">
						<div class="product-thumb">
							<div class="product-label">
							<span>TOP </span>
							<span class="sale">AD</span>
							</div>
							
							<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> get more views</button>
							<img src="./img/outfit.jpg" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">CALL:011 234 0901</h3>
							
							<h2 class="product-name"> <a href=""><i class="fa fa-user-circle"></i> TO PLACE YOUR AD HERE</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<a button class="primary-btn add-to-cart"  ><i class="fa fa-shopping-cart"></i> hangashopping@gmail.com</ button></a>
							</div>
						</div>
					</div>
				</div>

                                
                                
                                
                                
                                
                                
                                <!-- /Product Single -->

				<!-- Product Slick -->
				<div class="col-md-9 col-sm-6 col-xs-6">
					<div class="row">
						<div id="product-slick-2" class="product-slick">
 <?php             
$start = isset( $_GET["start"] ) ? (int)$_GET["start"] : 0;
$order = isset( $_GET["order"] ) ? preg_replace( "/[^a-zA-Z]/", "", 
$_GET["order"] ) : "price";

list( $products1, $totalRows ) = Product1::getProducts2( $start, 5, 
$order );


//displayPageHeader( "A look @ students" );
             
?> 
<?php
$rowCount = 0;
             
foreach ( $products1 as $product1 ) {
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
                                                                        <img src="./uploads/<?php echo $product1->getValueEncoded( "mainPic" ) ?>" width="314px" height="393px" style="border:1px solid #333333; " alt="">
								</div>
								<div class="product-body">
                                                                    <h3 class="product-price">R<?php echo $product1->getValueEncoded( "price" ) ?></h3><br>
                                                                    <p class="product-price"><b>Location:</b> <?php echo $product1->getValueEncoded( "province" ) ?>   [<?php echo $product1->getValueEncoded( "city" ) ?>]</p>
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

  <?php
}
//}
?> 									

							
							
							

						</div>
					</div>
				</div>
				<!-- /Product Slick -->
			     
     
				
	

	
				

	<!-- section -->
	
<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				
						

					<div class="col-md-6">
						<div class="shiping-methods">

                                                    <div class="banner-caption text-center">
							<h1 class="primary-color">SELLING<br></h1>
							
						</div>
							<div class="section-title">
								<h4 class="primary-color">Step 1<br></h4>
							</div>
							
								<div class="caption">
									<p>Take multiple photos of the item that you are looking to sell (the more the photos the better!)
										<p>
								</div>
							
						</div>

						<div class="shiping-methods">
							<div class="section-title">
								<h4 class="primary-color">Step 2<br></h4>
							</div>
							
								<div class="caption">
									<p>Post the picture onto your Hanga profile and add a few details about the item
										<p>
								</div>
							
						</div>
                                              <div class="shiping-methods">
                                                   
							<div class="section-title">
								<h4 class="primary-color">Step 3<br></h4>
							</div>
							
								<div class="caption">
									<p>That's it! Start receiving offers and earning your cash!
										<p>
								</div>
							
						</div>
                                             </div>





                   
                                                 
                                           <div class="col-md-6">
						<div class="shiping-methods">
                                                         <div class="banner-caption text-center">
							<h1 class="">BUYING<br></h1>
							
						</div>
							<div class="section-title">
								<h4 class="title">STEP 1</h4>
							</div>
							
								<div class="caption">
									<p>Search for your favourite styles from options ranging all across South Africa
										<p>
								</div>
							
						</div>

						<div class="shiping-methods">
							<div class="section-title">
								<h4 class="title">STEP 2</h4>
							</div>
							
								<div class="caption">
									<p>Found something you like? Great! Go ahead and contact the owner or feel free to 'heart' the item to save it for later
										<p>
								</div>
							
						</div>
                                              <div class="shiping-methods">
							<div class="section-title">
								<h4 class="title">STEP 3</h4>
							</div>
							        
								<div class="caption">
									<p>*Meet up , receive your item and start rocking your new piece!
										<p>
								</div>
							         
                                                                 <div class="banner-caption text-center">
							<h4 class="primary-color"><span class="primary-color">*Hanga advises meetups in a public location.<br>We do not advise sharing
                                                          personal details such as <br>addresses or banking information before receiving your goods </span></h4>
							




                   
                                                 </div>

</div>


					
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->







			
			
			
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
							<li><a href="https://facebook.com/pg/hangashopping/posts">facebook  <i class="fa fa-facebook"></i></a></li>
							
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


