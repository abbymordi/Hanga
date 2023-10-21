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
    <title>HANGA|buy|sell</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="bootstrap/stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="bootstrap/stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="bootstrap/stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="bootstrap/stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="bootstrap/themes/js/less.js" type="text/javascript"></script> -->
	
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

  <?php
          
require_once( "common.inc.php" );
require_once( "config.php" );
//require_once( "member.class2.php" );
require_once( "LogEntry.class.php" );
require_once( "product1.class2.php" );

$productCode = isset( $_REQUEST["productCode"] ) ? (string)$_REQUEST["productCode"] : 0;
          
if ( !$product1 = Product1::getByProductCode( $productCode) ) {
  displayPageHeader( "Error" );
  echo " <div> Product not found. </div> ";
  displayPageFooter();
  exit;
}


  ?>          
             
  
  
  
  
  
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
        <li><a href="user.php">Main</a> <span class="divider">/</span></li>
        <li><a href="userdemo.php">Single Products</a> <span class="divider">/</span></li>
    <li class="active">product Details</li>
    </ul>	
	<div class="row">	  
			<div id="gallery" class="span3">
            <a href="./uploads/<?php echo $product1->getValueEncoded( "mainPic" ) ?>" title="shirt: from  Italy">
<img src="./uploads/<?php echo $product1->getValueEncoded( "mainPic" ) ?>" width="314px" height="393px" style="border:1px solid #333333;" alt="no DP"/>
            </a>
			<div id="differentview" class="moreOptopm carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
                   <a href="./uploads/<?php echo $product1->getValueEncoded( "mainPic" ) ?>"> <img style="width:29%" src="./uploads/<?php echo $product1->getValueEncoded( "mainPic" ) ?>" alt=""/></a>
                   <a href="./uploads/<?php echo $product1->getValueEncoded( "firstView" ) ?>"> <img style="width:29%" src="./uploads/<?php echo $product1->getValueEncoded( "firstView" ) ?>" alt=""/></a>
                   <a href="./uploads/<?php echo $product1->getValueEncoded( "secondView" ) ?>" > <img style="width:29%" src="./uploads/<?php echo $product1->getValueEncoded( "secondView" ) ?>" alt=""/></a>
                  </div>
                  <div class="item">
                   <a href="./uploads/<?php echo $product1->getValueEncoded( "mainPic" ) ?>"> <img style="width:29%" src="./uploads/<?php echo $product1->getValueEncoded( "mainPic" ) ?>" alt=""/></a>
                   <a href="./uploads/<?php echo $product1->getValueEncoded( "firstView" ) ?>"> <img style="width:29%" src="./uploads/<?php echo $product1->getValueEncoded( "firstView" ) ?>" alt=""/></a>
                   <a href="./uploads/<?php echo $product1->getValueEncoded( "secondView" ) ?>" > <img style="width:29%" src="./uploads/<?php echo $product1->getValueEncoded( "secondView" ) ?>" alt=""/></a>
                  </div>
                </div>
              <!--  
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a> 
			  -->
              </div>
			  
			 
			</div>
			<div class="span6">
				<div class="well well-small"><a id="myCart" href="profile.php?sellerId= <?php echo $product1->getValueEncoded( "sellerId" ) ?>"><i class="icon-user"></i>Direct email Seller <span class="badge badge-warning pull-right"><i class="icon-check"></i><?php echo $product1->getValueEncoded( "name" ) ?></span></a></div>
				 
				<hr class="soft"/>
				<form class="form-horizontal qtyFrm">
				  <div class="control-group">
					<label class="control-label"><span></span></label>
					<div class="controls">
                                            <div class="well well-small"><a id="myCart" href=""><img src="" alt=""><p><i class=" icon-phone-sign"></i>  <?php echo $product1->getValueEncoded( "phone" ) ?></p></a></div>
                                            <div class="well well-small"><a id="myCart" href=""><img src="" alt=""><p><i class=" icon-envelope"></i>    <?php echo $product1->getValueEncoded( "email" ) ?></p></a></div>  
					
                                                    
                                                    </div>
				  </div>
				</form>
				
				<hr class="soft"/>
				<h4><?php echo $product1->getValueEncoded( "productDesc" ) ?></h4>
				
				<hr class="soft clr"/>
				<h1>
				R<?php echo $product1->getValueEncoded( "price" ) ?>
				
				</h1>
				
				<br class="clr"/>
			<a href="#" name="detail"></a>
			<hr class="soft"/>
			</div>



			
			
</div>


</div>


</div>
</div>
<!-- MainBody End ============================= -->

	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
	
	<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="themes/switch/themeswitch.css" type="text/css" media="screen" />

	
</div>
<span id="themesBtn"></span>
</body>
</html>
