<!DOCTYPE html>
<html lang="">

<head>
<title></title>
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
  <div class="wrapper row3">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        
          <h1><img src="images/demo/finallogo1.png"</h1> 
      </div>


<?php
          
require_once( "common.inc.php" );
require_once( "config.php" );
//require_once( "member.class2.php" );
require_once( "LogEntry.class.php" );
          
$sellerId = isset( $_REQUEST["sellerId"] ) ? (int)$_REQUEST["sellerId"] : 0;
          
if ( !$product1 = Product1::getSeller( $sellerId ) ) {
  displayPageHeader( "Error" );
  echo " <div> Member not found. </div> ";
  displayPageFooter();
  exit;
}
          
if ( isset( $_POST["action"] ) and $_POST["action"] == "Save Changes" ) {
   saveStudent();
} elseif ( isset( $_POST["action"] ) and $_POST["action"] == "Delete Student" 
) {
  deleteStudent();
} else {
  displayForm( array(), array(), $product1 );
}
          
function displayForm( $errorMessages, $missingFields, $product1 ) {
  $logEntries = LogEntry::getLogEntries( $product1-> getValue( "sellerId" ) );
  displayPageHeader( "View student: " . $product1-> getValueEncoded( 
"email" ) ." " . $product1-> getValueEncoded( "phone" ) );
          
  if ( $errorMessages ) {
    foreach ( $errorMessages as $errorMessage ) {
      echo $errorMessage;
    }
  }
          
  $start = isset( $_REQUEST["start"] ) ? (int)$_REQUEST["start"] : 0;
  $order = isset( $_REQUEST["order"] ) ? preg_replace( "/[^ a-zA-Z]/", "", 
$_REQUEST["order"] ) : "name";
?> 
     <form action="viewStudent.php" method="post" style="margin-bottom: 
50px;"> 
       <div style="width: 30em;"> 
         <input type="hidden" name="sellerId" id="memberId" value=" <?php 
echo $product1-> getValueEncoded( "sellerId" ) ?> " /> 
         <input type="hidden" name="start" id="start" value=" <?php echo 
$start ?> " /> 
         <input type="hidden" name="order" id="order" value=" <?php echo 
$order ?> " /> 
          
         <label for="name" <?php validateField( "name", 
$missingFields ) ?>  > Name * </label> 
         <input type="text" name="name" id="name" value=" <?php echo 
$product1-> getValueEncoded( "name" ) ?> " /> 
        <!--  <label for="password" > New password </label>
         <input type="password" name="password" id="password" value="" /> -->
         
         <label for="email" <?php validateField( "email", 
$missingFields ) ?>  > Email address * </label> 
         <input type="email" name="email" id="email" value=" <?php 
echo $product1-> getValueEncoded( "email" ) ?> "/> 
         
         <label for="lastName" <?php validateField( "lastName", 
$missingFields ) ?>  > First name * </label> 
         <input type="text" name="lastName" id="lastName" value=" <?php echo
$product1-> getValueEncoded( "lastName" ) ?> " /> 
         
         <label for="city" <?php validateField( "city", 
$missingFields ) ?>  > Last name * </label> 
         <input type="text" name="city" id="city" value=" <?php echo   
  $product1-> getValueEncoded( "city" ) ?> " />
         
<label class="control-label" for="bio" <?php validateField( "bio", 
$missingFields ) ?>>Your related Bio </label>
 <textarea name="bio" id="bio" cols="26" rows="3" value=" <?php echo   
  $product1-> getValueEncoded( "bio" ) ?> " >Additional information</textarea>          
         
         
			
  <div class="control-group">
			<label class="control-label" <?php validateField( "province", $missingFields ) ?> for="province">Province<sup>*</sup></label>
			<div class="controls">
			 
				Gauteng<input type="radio" name="province" id="gauteng" value="gauteng"<?php 
                                setChecked( $product1, "province", "gauteng" )?>><br>
                                Limpopo<input type="radio"  name="province" id="limpopo" value="limpopo"<?php 
                  setChecked( $product1, "province", "limpopo" )?>><br>
                               North West <input type="radio" name="province" id="northWest" value="northWest"<?php 
                  setChecked( $product1, "province", "Mr" )?>><br>
                                Northern Cape<input type="radio"  name="province" id="northernCape" value="northernCape"<?php 
                  setChecked( $product1, "province", "northernCape" )?>><br>
                               Free State <input type="radio"  name="province" id="freeState" value="freeState"<?php 
                  setChecked( $product1, "province", "freeState" )?>><br>
                               Eastern Cape <input type="radio" name="province" id="easternCape" value="easternCape"<?php 
                  setChecked( $product1, "province", "easternCape" )?>><br> 
                                KZN<input type="radio" name="province" id="kzn" value="kzn"<?php 
                  setChecked( $product1, "province", "kzn" )?>><br>
                                Mpumalanga<input type="radio"  name="province" id="mpumalanga" value="mpumalanga"<?php 
                  setChecked( $product1, "province", "mpumalanga" )?>><br>
                                Western Cape<input type="radio" name="province" id="WesternCape" value="westernCape"<?php 
                  setChecked( $product1, "province", "westernCape" )?>><br>
			</div>	
         
         
         
         
         
         
         
     
                
			
			
	
         
       
         
         
         </select> 
     
         <div style="clear: both;"> 
           <input type="submit" name="action" id="saveButton" value="Save Changes" /> 
           <input type="submit" name="action" id="deleteButton" value="Delete Student" style="margin-right: 20px;" /> 
         </div> 
       </div> 
     </form> 
          
     <h2> Access log </h2> 
          
     <table cellspacing="0" style="width: 30em; border: 1px solid #666;" > 
       <tr> 
         <th> Web page </th> 
         <th> Number of visits </th> 
         <th> Last visit </th> 
       </tr> 
 <?php
$rowCount = 0;
          
foreach ( $logEntries as $logEntry ) {
  $rowCount++;
?> 
       <tr <?php if ( $rowCount % 2 == 0 ) echo '  class="alt"' ?> > 
         <td>  <?php echo $logEntry-> getValueEncoded( "topicPage" ) ?>  </td> 
         <td>  <?php echo $logEntry-> getValueEncoded( "numVisits" ) ?>  </td> 
         <td >  <?php echo $logEntry-> getValueEncoded( "lastAccess" ) ?>  </td> 
       </tr> 
 <?php
}
?>
   </table> 
          
     <div style="width: 30em; margin-top: 20px; text-align: center;" > 
       <a href="viewStudents.php?start= <?php echo $start ?>&amp;order= <?php 
echo $order ?> "> Back </a> 
     </div> 
          
 <?php
  displayPageFooter();
  
}
    
function saveStudent() {
   $requiredFields = array("name", "lastName", "email","bio","city","province","phone");
    $missingFields = array();
    $errorMessages = array();

    $product1 = new Product1(array(
        
       
        
        "name" => isset($_POST["name"]) ? preg_replace
                        ("/[^ \'\-a-zA-Z0-9]/", "", $_POST["name"]) : "",
        
        "lastName" => isset($_POST["lastName"]) ? preg_replace
                        ("/[^ \'\-a-zA-Z0-9]/", "", $_POST["lastName"]) : "",
        
        "email" => isset($_POST["email"]) ? preg_replace
                        ("/[^ \@\.\-\_a-zA-Z0-9]/", "", $_POST["email"]) : "",
        
       // "password" => ( isset($_POST["password1"]) and isset
             //   ($_POST["password2"]) and $_POST["password1"] == $_POST["password2"] ) ?
              //  preg_replace("/[^ \-\_a-zA-Z0-9]/", "", $_POST["password1"]) : "",
        
        "city" => isset($_POST["city"]) ? preg_replace("/[^ \-\_a-zA-Z0-9]/", "", $_POST["city"]) : "",
        
        "province" => isset($_POST["province"]) ? preg_replace
                       ("/[^ \'\-a-zA-Z0-9]/", "", $_POST["province"]) : "",
        
        "phone" => isset($_POST["phone"]) ? preg_replace
                        ("/[^ \'\-a-zA-Z0-9]/", "", $_POST["phone"]) : "",
        
      
        
        
    ));


          
  foreach ($requiredFields as $requiredField) {
        if (!$product1->getValue($requiredField)) {
            $missingFields[] = $requiredField;
        }
    }
    
   

  
  if ( $errorMessages ) {
    displayForm( $errorMessages, $missingFields, $product1 );
  } else {
    $product1-> update();
    displaySuccess();
  }
}
          
function deleteMember() {
  $product1 = new Product1( array(
    "sellerId" =>  isset( $_POST["sellerId"] ) ? (int) $_POST["sellerId"] : "",
  ) );
  LogEntry::deleteAllForMember( $product1-> getValue( "sellerId" ) );
  $product1->delete();
  displaySuccess();
}
          
function displaySuccess() {
  $start = isset( $_REQUEST["start"] ) ? (int)$_REQUEST["start"] : 0;
  $order = isset( $_REQUEST["order"] ) ? preg_replace( "/[^ a-zA-Z]/", "", 
$_REQUEST["order"] ) : "name";
  displayPageHeader( "Changes saved" );
?> 
     <p> Your changes have been saved.  <a href="viewStudents.php?start= <?php 
echo $start ?>&amp;order= <?php echo $order ?> " > Return to member list </a>  </p> 
 <?php
  displayPageFooter();
}
          
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