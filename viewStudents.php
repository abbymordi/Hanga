<!DOCTYPE html>
<html lang="">

<head>
<title>admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded" style="background-image:url('images/demo/backgrounds/background.png');">  
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        
         <h1><img src="images/demo/finallogo1.png"</h1> 
      </div>

<?php
             
require_once( "common.inc.php" );
require_once( "config.php" );
require_once( "member.class2.php" );
?>
  </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row3">
  <main class="hoc container clear"> 
    <!--main body -->
    <!-- ################################################################################################-->
    <article class="group">
       <div class="content">

<?php             
$start = isset( $_GET["start"] ) ? (int)$_GET["start"] : 0;
$order = isset( $_GET["order"] ) ? preg_replace( "/[^a-zA-Z]/", "", 
$_GET["order"] ) : "postedDate";
list( $products1, $totalRows ) = Product1::getProducts1( $start, 5, 
$order );
displayPageHeader( "A look @ students" );
             
?> 
     <h2> Displaying Students  <?php echo $start + 1 ?>  -  <?php echo min( $start +  
'PAGE_SIZE', $totalRows ) ?>  of  <?php echo $totalRows ?>  </h2> 
             
     <table cellspacing="0" style="width: 30em; border: 1px solid #666;"> 
       <tr> 
           <th>  <?php if ( $order != "name" ) { ?>  <a href="viewStudents.php?
order=name">  <?php } ?> Name <?php if ( $order != "name" ) 
{ ?>  </a>  <?php } ?>  </th>

         <th>  <?php if ( $order != "productName" ) { ?>  <a href="viewStudents.php?
order=productName" >  <?php } ?> Product Name <?php if ( $order != "productName" ) 
{ ?>  </a>  <?php } ?>  </th> 
         <th>  <?php if ( $order != "productCode" ) { ?>  <a href="viewStudents.php?
order=productCode">  <?php } ?> Product Code <?php if ( $order != "productCode" ) 
{ ?>  </a>  <?php } ?>  </th> 
       </tr> 
 <?php
$rowCount = 0;
             
foreach ( $products1 as $product1 ) {
  $rowCount++;
?> 
       <tr <?php if ( $rowCount % 2 == 0 ) echo ' class="alt"' ?>  > 
            <td>  <a href="viewStudent.php?sellerId= <?php echo $product1->getValueEncoded( "sellerId" ) ?>&amp;start= <?php echo $start ?>&amp;order= <?php echo 
$order ?> ">  <?php echo $product1-> getValueEncoded( "name" ) ?>  </a>  </td> 
         <td>  <?php echo $product1->getValueEncoded( "productName" ) ?>  </td> 
         <td>  <?php echo $product1->getValueEncoded( "productCode" ) ?>  </td> 
       </tr> 
 <?php
}
?> 
     </table> 
             
     <div style="width: 30em; margin-top: 20px; text-align: center;" > 
 <?php if ( $start  >  0 ) { ?> 
         <a href="viewStudents.php?start= <?php echo max( $start - 'PAGE_SIZE', 0 ) 
?>  & amp;order= <?php echo $order ?> " > Previous page </a> 
 <?php } ?>
&nbsp;
 <?php if ( $start + 'PAGE_SIZE'  < $totalRows ) { ?> 
<a href="viewStudents.php?start= <?php echo min( $start + 'PAGE_SIZE', 
$totalRows ) ?>  & amp;order= <?php echo $order ?> " > Next page </a> 
 <?php } ?> 
     </div> 
             
 <?php
displayPageFooter();
?> 
      
  </article>
    <!-- ################################################################################################ -->
  <!-- / main body -->
   <div class="clear"></div>
  </main>
 <footer><a class="btn" href="logout.php">LOGOUT</a></footer>     
</div>
</div>

<!-- ################################################################################################-->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->


<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
 

<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">by Chapsey and <a target="" href="" title="">OS</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>     