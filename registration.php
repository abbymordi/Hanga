<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>HANGA|registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="bootstrap/themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="bootstrap/themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="bootstrap/themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="bootstrap/themes/less/bootshop.less">
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
    <link rel="shortcut icon" href="bootstrap/themes/images/ico/favicon.ico">
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
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>
	<h3> Registration</h3>	
	<div class="well">
	<!--
	<div class="alert alert-info fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	<div class="alert fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	 <div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div> -->
      <?php
          
require_once( "common.inc.php" );
   
 
if ( isset( $_POST["action"] ) and $_POST["action"] == "register" ) {
  processForm();
} else {
  displayForm( array(), array(), new Member( array() ) );
}
                     
 
function displayForm( $errorMessages, $missingFields, $member ) {
  displayPageHeader( "" );
          
  if ( $errorMessages ) {
   foreach ( $errorMessages as $errorMessage ) {
      echo $errorMessage;
    }
  } else {
  }
  
?>   
        
        
        
        
        
        
        <form class="form-horizontal" action="registration.php" method="post"  >
             <input type="hidden" name="action" value="register" />
            
		<h4>Personal information</h4>
               <div class="control-group">
		<label class="control-label" <?php validateField( "Title", 
$missingFields ) ?> >Title <sup>*</sup></label>
		<div class="controls">
		<select class="span1" name="Title">
			<option  value="">-</option>
			<option name="Title" id="Mr" value="<?php 
echo $member->getValueEncoded( "Title" ) ?>">Mr.</option>
			<option name="Title" id="Mrs" value="<?php 
echo $member->getValueEncoded( "Title" ) ?>">Mrs</option>
			<option name="Title" id="Miss" value="<?php 
echo $member->getValueEncoded( "Title" ) ?>">Miss</option>
		</select>
		</div>
		</div>
        
		<div class="control-group">
			<label class="control-label"  <?php validateField( "FirstName", 
$missingFields ) ?> for="FirstName">First name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="FirstName" placeholder="First Name" value="<?php 
echo $member->getValueEncoded( "FirstName" ) ?>"  >
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label"  <?php validateField( "LastName", 
$missingFields ) ?>  for="LastName">Last name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="LastName" placeholder="Last Name" value="<?php 
echo $member->getValueEncoded( "LastName" ) ?>">
			</div>
		 </div>
          
                

             



		<div class="control-group">
		<label class="control-label"  <?php validateField( "Email", 
$missingFields ) ?> for="Email">Email <sup>*</sup></label>
		<div class="controls">
                    <input type="email" id="Email" placeholder="Email" value="<?php 
echo $member->getValueEncoded( "Email" ) ?>">
		</div>
	  </div>
            
	  
	<div class="control-group">
		<label class="control-label" <?php echo 
$member->getValueEncoded( "Password" ) ?> for="Password1">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" id="Password1" placeholder="Password">
		</div>
	  </div>	  
		
      <div class="control-group">
		<label class="control-label" <?php if ( $missingFields ) echo ' 
class="error"' ?> for="Password2">Retype Password<sup>*</sup></label>
		<div class="controls">
		  <input type="password" id="Password2" placeholder="retype Password">
		</div>
	  </div>	          
                
	 

	<div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Hanga</strong> ensures you that the info you submit here will be secure and won't be used without your acknowledgement
	 </div>	

		<h4>Other Details</h4>
		
		
		
		
		
		
		<div class="control-group">
			<label class="control-label"  <?php validateField( "City", 
$missingFields ) ?>  for="City">City<sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="City" placeholder="City" value="<?php 
echo $member->getValueEncoded( "City" ) ?>" /> 
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" <?php validateField( "Province", $missingFields ) ?> for="Province">Province<sup>*</sup></label>
			<div class="controls">
			  <select id="Province" >
				<option value="">-</option>
				<option name="Province" id="Gauteng" <?php setChecked( $member, "Province", "Gauteng" )?> value="Gauteng">Gauteng</option>
                                <option name="Province" id="Limpopo" <?php setChecked( $member, "Province", "Limpopo" )?>  value="Limpopo">Limpopo</option>
                                <option name="Province" id="North West" <?php setChecked( $member, "Province", "North West" )?> value="North West">North West</option>
                                <option name="Province" id="Northern  Cape" <?php setChecked( $member, "Province", "Northern  Cape" )?> value="Northern  Cape">Northern  Cape</option>
                                <option name="Province" id="Free State" <?php setChecked( $member, "Province", "Free State" )?> value="Free State">Free State</option>
                                <option name="Province" id="Eastern Cape" <?php setChecked( $member, "Province", "Eastern Cape" )?> value="Eastern Cape ">Eastern Cape </option>
                                <option name="Province" id="KZN" <?php setChecked( $member, "Province", "KZN" )?> value="KZN">KZN</option>
                                <option name="Province" id="Mpumalanga" <?php setChecked( $member, "Province", "Mpumalanga" )?> value="Mpumalanga">Mpumalanga</option>
                                <option name="Province" id="Western Cape" <?php setChecked( $member, "Province", "Western Cape" )?> value="Western Cape">Western Cape</option></select>
			</div>
		</div>		
		
		
		
		
		<div class="control-group">
			<label class="control-label"  <?php validateField( "Phone", 
$missingFields ) ?> for="Phone">Phone <sup>*</sup></label>
			<div class="controls">
			  <input type="text"  name="Phone" id="Phone" placeholder="Phone"value="<?php 
echo $member->getValueEncoded( "Phone" ) ?>" /> <span>You must register at least one phone number</span>
			</div>
		</div>
		
		
		
	
	
	<div class="control-group">
			<div class="controls">
				<input type="hidden" name="email_create" value="1">
				<input type="hidden" name="is_new_customer" value="1">
				<input class="btn btn-large btn-success" type="submit"  id="submitbutton" value="REGISTER" />
                                <input class="btn btn-large btn-success" type="reset" value="Reset Form" />
			</div>
		</div>		
	</form>
</div>

</div>
</div>
</div>
</div
 <?php
  displayPageFooter();
}
          
function processForm() {
  $requiredFields = array("Title","FirstName", "LastName","Email" ,"Password" ,"City", "Province","Phone" );
  $missingFields = array();
  $errorMessages = array();
          
  $member = new Member(array(
    "Title" =>  isset( $_POST["Title"] ) ? preg_replace( "/[^ \-\_a-zA-Z0-9]/", 
"", $_POST["Title"] ) : "",   
      
      
          "FirstName" => isset( $_POST["FirstName"] ) ? preg_replace
( "/[^ \-\_a-zA-Z0-9]/", "", $_POST["FirstName"] ) : "",
      
   "LastName" =>  isset( $_POST["LastName"] ) ? preg_replace
( "/[^ \'\-a-zA-Z0-9]/", "", $_POST["LastName"] ) : "",
      

   
      
    "Email" =>  isset( $_POST["Email"] ) ? preg_replace
( "/[^ \@\.\-\_a-zA-Z0-9]/", "", $_POST["Email"] ) : "", 
      
     "Password" => ( isset($_POST["Password1"])  and isset
( $_POST["Password2"] ) and $_POST["Password1"] == $_POST["Password2"] ) ? 
preg_replace( "/[^ \-\_a-zA-Z0-9]/", "", $_POST["Password1"] ) : "",    
      
      
    "City" =>  isset( $_POST["City"] ) ? preg_replace
( "/[^ \'\-a-zA-Z0-9]/", "", $_POST["City"] ) : "", 
      
  "Province" =>  isset( $_POST["Province"] ) ? preg_replace
( "/[^ \'\-a-zA-Z0-9]/", "", $_POST["Province"] ) : "",      
      

   
      
 
      
     "Phone" =>  isset( $_POST["Phone"] ) ? preg_replace
( "/[^ \'\-a-zA-Z0-9]/", "", $_POST["Phone"] ) : "",
      
      
  "joinDate" => date( "Y-m-d" ) 
              ));
              
   

    foreach ( $requiredFields as $requiredField ) {
  if ( !$member->getValue( $requiredField ) ) {
      $missingFields[] = $requiredField;
    }
  }
          
  if ( $missingFields ) {
    $errorMessages[] = ' <p class="error" > There were some fields you did not fill. Please complete them which are highlighted below and 
click REGISTER to resend the form. </p>';
  }
          
  if ( !isset( $_POST["Password1"] ) or !isset( $_POST["Password2"] ) or 
!$_POST["Password1"] or !$_POST["Password2"] or ( $_POST["Password1"] != 
$_POST["Password2"] ) ) {
    $errorMessages[] = ' <p class="error" > Passwords do not match  </p> ';
  }
          

          
  if ( Member::getByEmail( $member->getValue( "Email" ) ) ) {
    $errorMessages[] = '< p class="error" > A member with that email address 
already exists. Please choose another email address, or 
contact the VL admin for more info. </p> ';
  }
          
  if ( $errorMessages ) {
    displayForm( $errorMessages, $missingFields, $member );
  } else {
    $member->insert();
    displayThanks();
  }
}
          
function displayThanks() {
  displayPageHeader( "Your registration is being processed!" );
?> 
     <p>Welcome aboard to Hanga.The admin will contact you via email for activation  </p> 
 <?php
  displayPageFooter();
}
?> 
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="bootstrap/themes/js/jquery.js" type="text/javascript"></script>
	<script src="bootstrap/themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="bootstrap/themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="bootstrap/themes/js/bootshop.js"></script>
    <script src="bootstrap/themes/js/jquery.lightbox-0.5.js"></script>
	
	<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="bootstrap/themes/switch/themeswitch.css" type="text/css" media="screen" />
<script src="bootstrap/themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
	<div id="themeContainer">
	<div id="hideme" class="themeTitle">Style Selector</div>
	<div class="themeName">Oregional Skin</div>
	<div class="images style">
	<a href="bootstrap/themes/css/#" name="bootshop"><img src="bootstrap/themes/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>
	<a href="bootstrap/themes/css/#" name="businessltd"><img src="bootstrap/themes/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>
	</div>
	<div class="themeName">Bootswatch Skins (11)</div>
	<div class="images style">
		<a href="themes/css/#" name="amelia" title="Amelia"><img src="themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="spruce" title="Spruce"><img src="themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
		<a href="themes/css/#" name="superhero" title="Superhero"><img src="themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="cyborg"><img src="themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="cerulean"><img src="themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="journal"><img src="themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="readable"><img src="themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>	
		<a href="themes/css/#" name="simplex"><img src="themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="slate"><img src="themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="spacelab"><img src="themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="united"><img src="themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
		<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
	</div>
	<div class="themeName">Background Patterns </div>
	<div class="images patterns">
		<a href="themes/css/#" name="pattern1"><img src="themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
		<a href="themes/css/#" name="pattern2"><img src="themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern3"><img src="themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern4"><img src="themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern5"><img src="themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern6"><img src="themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern7"><img src="themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern8"><img src="themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern9"><img src="themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern10"><img src="themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>
		
		<a href="themes/css/#" name="pattern11"><img src="themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern12"><img src="themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern13"><img src="themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern14"><img src="themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern15"><img src="themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>
		
		<a href="themes/css/#" name="pattern16"><img src="themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern17"><img src="themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern18"><img src="themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern19"><img src="themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern20"><img src="themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>
		 
	</div>
	</div>
</div>

</body>
</html>


