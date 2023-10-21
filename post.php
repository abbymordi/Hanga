
<?php
      
      
require_once( "common.inc.php" );


checkLogin();
?>   



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>HANGA|post</title>
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
                        <li><a href="user.php">User Page</a> <span class="divider">/</span></li>
                        <li class="active">Post Page</li><span class="divider">/</span></li>
                        <li><a href="post.php"> Post another AD</a> <span class="divider">/</span></li>
                    </ul>
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
           
          </li>
						<!-- /Account -->
                        
						<!-- Cart -->
							<!-- / Mobile nav toggle -->
					</ul>
				</div>
                    
                    <h3> Item Ad post</h3>	
                    <div class="well">
                        <?php
                       require_once( "common.inc.php" );


                       if (isset($_POST["action"]) and $_POST["action"] == "register") {
                           
 	
                           
                           
                           
                            processForm();
                        } else {
                            displayForm(array(), array(), new Product1(array()));
                        }

                        function displayForm($errorMessages, $missingFields, $product1) {
                           displayPageHeader("");

                            if ($errorMessages) {
                               foreach ($errorMessages as $errorMessage) {
                                   echo $errorMessage;
                                }
                            } else {
                                ?> 


                            <?php } ?>       

	




                        <form class="form-horizontal"   action="post.php" method="post" enctype="multipart/form-data"  >
                                <input type="hidden" name="action" value="register" /> 

                                <h4>Item Info</h4>
                      	          
                                
                                
                                
                                  <div class="control-group">
		<label class="control-label" <?php validateField( "category", $missingFields ) ?> >FOR <sup>*</sup></label>
		<div class="controls">
		Men<input type="radio" name="category" id="men" placeholder="" value="men"  <?php 
                  setChecked( $product1, "category", "men" )?> ><br> 
                Women<input type="radio" name="category" id="women" placeholder="" value="women"  <?php 
                  setChecked( $product1, "category", "women" )?> > <br>
               Kids<input type="radio" name="category" id="kids" placeholder="" value="kids"  <?php 
                  setChecked( $product1, "category", "kids" )?> ><br>
                Shoes<input type="radio" name="category" id="shoes" placeholder="" value="shoes"  <?php 
                  setChecked( $product1, "category", "shoes" )?> > <br>
                Jewellery<input type="radio" name="category" id="jewellery" placeholder="" value="jewellery"  <?php 
                  setChecked( $product1, "category", "jewellery" )?> > <br>
               Accessories<input type="radio" name="category" id="accessories" placeholder="" value="accessories"  <?php 
                  setChecked( $product1, "category", "accessories" )?> > 
		</div>
		</div>
                                <div class="control-group">
                                    <label class="control-label" <?php validateField("productName", $missingFields) ?>  for="productName">Product name <sup>*</sup></label>
                                    <div class="controls">
                                        <input type="text" name="productName" id="productName" placeholder="productName" value="<?php echo $product1->getValueEncoded("productName") ?>"  > 
                                    </div>
                                </div>
                               
                                
                           <div class="alert alert-block alert-error fade in">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                   Enter Amount only without currency symbol R
                                </div>     
                                
                                
                                <div class="control-group">
                                    <label class="control-label" <?php validateField("price", $missingFields) ?>  for="price">Price<sup>*</sup></label>
                                    <div class="controls">
                                        <input type="number" name="price" id="price" placeholder="price" value="price"  > 
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label" <?php validateField("productDesc", $missingFields) ?>  for="productDesc" >Product Description <sup>*</sup></label>
                                    <div class="controls">
                                        <textarea name="productDesc" id="productDesc" placeholder="Describe Your Item" cols="26" rows="3" value="<?php echo $product1->getValueEncoded("mainPic") ?>">  </textarea>
                                    </div>
                                </div>

                                                          

                                   



                              
  <div class="alert alert-block alert-error fade in">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                   An image above 2MB will not be uploaded
                                </div>
                                
                                
                                <div class="control-group">
                                    <label class="control-label" for="mainPic" >Main Pic<sup>*</sup></label>
                                    <div class="controls">
                                        <input type="file" name="mainPic" id="mainPic">
                                    </div>
                                </div> 
                                
                                
                                
                                
                                 <div class="control-group">
                                    <label class="control-label" for="firstView" >firt view<sup>*</sup></label>
                                    <div class="controls">
                                        <input type="file" name="firstView" id="firstView">
                                    </div>
                                </div> 
                              
                                    
                                    
                                    
                                    
                             <div class="control-group">
                                    <label class="control-label" for="secondView" >second view<sup>*</sup></label>
                                    <div class="controls">
                                        <input type="file" name="secondView" id="secondView">
                                    </div>
                                </div> 

                                 

 <div class="alert alert-block alert-error fade in">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                   Input your Exact City/Town/Suburb
                                </div>


                                <div class="control-group">
                                    <label class="control-label" <?php validateField("city", $missingFields) ?>  for="city">City<sup>*</sup></label>
                                    <div class="controls">
                                        <input type="text" name="city" id="city" placeholder="Available where mostly?" value="<?php echo $product1->getValueEncoded("city") ?>"  > 
                                    </div>
                                </div>
                              <div class="control-group">
			<label class="control-label" <?php  validateField( "province", $missingFields ) ?> for="province">Province<sup>*</sup></label>
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
		</div>



                                <div class="control-group">
                                    <label class="control-label" <?php validateField("Sellerphone", $missingFields) ?>  for="sellerPhone">Seller's Phone <sup>*</sup></label>
                                    <div class="controls">
                                        <input type="text" name="sellerPhone" id="sellerPhone" placeholder="phone of immediate seller" value="<?php echo $product1->getValueEncoded("sellerPhone") ?>"  > 
                                    </div>
                                </div>

                <div class="control-group">
                                    <label class="control-label" <?php  validateField("sellerEmail", $missingFields) ?>  for="sellerEmail">Seller's Email <sup>*</sup></label>
                                    <div class="controls">
                                        <input type="text" name="sellerEmail" id="sellerEmail" placeholder="email of immediate seller" value="<?php echo $product1->getValueEncoded("sellerEmail") ?>"  > 
                                    </div>
                                </div>



                                <div class="control-group">
                                    <div class="controls">

                                        <input class="btn btn-large btn-success" type="submit" name="submitButton" id="submitButton" value="register" />
                                        <input class="btn btn-large btn-success" type="reset" name="resetbutton"  id="resetbutton" value="reset" />
                                    </div>
                                </div>		
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <?php
    displayPageFooter();
}

function processForm() {
    $requiredFields = array("category","productName", "price", "productDesc","city","mainPic","firstView","secondView","province","sellerPhone","sellerEmail");
    $missingFields = array();
   $errorMessages = array();

     $product1 = new Product1(array(
        
      "category" => isset($_POST["category"]) ? preg_replace
                       ("/[^ \-\_a-zA-Z0-9]/", "", $_POST["category"]) : "",
        
       "productName" => isset($_POST["productName"]) ? preg_replace
                       ("/[^ \'\-a-zA-Z0-9]/", "", $_POST["productName"]) : "",
        
       "price" => isset($_POST["price"]) ? preg_replace
                        ("/[^ \'\-a-zA-Z0-9]/", "", $_POST["price"]) : "",
        
        "productDesc" => isset($_POST["productDesc"]) ? preg_replace
                       ("/[^ \@\.\-\_a-zA-Z0-9]/", "", $_POST["productDesc"]) : "",
        
       "mainPic" => isset($_POST["mainPic"]) ? preg_replace
                       ("/[^ \@\.\-\_a-zA-Z0-9]/", "", $_POST["mainPic"]) : "",
         
         
         "firstView" => isset($_POST["firstView"]) ? preg_replace
                       ("/[^ \@\.\-\_a-zA-Z0-9]/", "", $_POST["firstView"]) : "",  
         
         "secondView" => isset($_POST["secondView"]) ? preg_replace
                       ("/[^ \@\.\-\_a-zA-Z0-9]/", "", $_POST["secondView"]) : "",
        
        "city" => isset($_POST["bio"]) ? preg_replace("/[^ \-\_a-zA-Z0-9]/", "", $_POST["city"]) : "",
        
        
        
    
        
        "province" => isset($_POST["province"]) ? preg_replace
                       ("/[^ \'\-a-zA-Z0-9]/", "", $_POST["province"]) : "",
        
        "sellerPhone" => isset($_POST["phone"]) ? preg_replace
                        ("/[^ \'\-a-zA-Z0-9]/", "", $_POST["sellerPhone"]) : "",
        
        "sellerEmail" => isset($_POST["status"]) ? preg_replace
                      ("/[^ \'\-a-zA-Z0-9]/", "", $_POST["sellerEmail"]) : "",
        
        "postedDate" => date("M,d,Y h:i:s A")
    ));



    foreach ($requiredFields as $requiredField) {
        if (!$product1->getValue($requiredField)) {
            $missingFields[] = $requiredField;
        }
    }
    
  //if ($missingFields) {
      // $errorMessages[] = '<p class="error"> There were some fields you did not fill. Please complete them which are highlighted below and 
//click REGISTER to resend the form. </p>';
  //  } 
  
  
  if ((empty($_POST['category'])) 
                   
                
                    ) 
             {
            $errorMessages[] = '<p class="error"> Category is not filled </p>';
           
            
            
             }   
    
  if ((empty($_POST['productName']))
                     ) 
              {
               $errorMessages[] = '<p class="error"> Product Name is not filled </p>';
               
          }  
    if ((empty($_POST['productDesc']))
                    ) 
              {
              $errorMessages[] = '<p class="error"> Product Description is not filled </p>';
           }   
           
    
           
      if ((empty($_POST['city']))
                    ) 
               {
             $errorMessages[] = '<p class="error"> City is required  </p>';
          }    
           
          if ((empty($_POST['province']))
                     ) 
               {
             $errorMessages[] = '<p class="error"> province is not filled  </p>';
           }           
           
           
           
           
        if ((empty($_POST['sellerEmail']))
                     ) 
              {
               $errorMessages[] = '<p class="error"> Email is required  </p>';
             
               
           }           
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
   
echo "<pre>", print_r($_FILES['mainPic']['name']),"</pre>";
echo "<pre>", print_r($_FILES['firstView']['name']),"</pre>";
echo "<pre>", print_r($_FILES['secondView']['name']),"</pre>";



$image_name = addslashes($_FILES['mainPic']['name']);
$image_name1 = addslashes($_FILES['firstView']['name']);
$image_name2 = addslashes($_FILES['secondView']['name']);
$size = $_FILES["mainPic"] ["size"];
$size1 = $_FILES["firstView"] ["size"];
$size2 = $_FILES["secondView"] ["size"];
$error = $_FILES["mainPic"] ["error"];
$error1 = $_FILES["firstView"] ["error"];
$error2 = $_FILES["secondView"] ["error"];
$target = 'uploads/' . $image_name;
$target1 = 'uploads/' . $image_name1;
$target2 = 'uploads/' . $image_name2;
 if ($error > 0){
 die("Error uploading main picture file! Format is not allowed or file size more than 2MB.");
 }else{
 	if($size > 10000000) //conditions for the file
	{
 	die("Format for main picturee is not allowed or file size is too big!");
 	}
 }  
 
 
        
if (move_uploaded_file($_FILES['mainPic']['tmp_name'],$target)){
    
    echo 'main picture  uploaded succesfully';  
 }

 if ($error1 > 0){
 die("Error uploading first view file! Format is not allowed or file size more than 2MB.");
 }else{
 	if($size1 > 10000000) //conditions for the file
	{
 	die("Format for first view is not allowed or file size is too big!");
 	}
 }    
        
if (move_uploaded_file($_FILES['firstView']['tmp_name'],$target1)){
    
    echo 'first view uploaded succesfully';  
 }
    
   
if ($error2 > 0){
 die("Error uploading second view file! Format is not allowed or file size more than 2MB.");
 }else{
 	if($size2 > 10000000) //conditions for the file
	{
 	die("Format for second view is not allowed or file size is too big!");
 	}
 }    
        
if (move_uploaded_file($_FILES['secondView']['tmp_name'],$target2)){
    
    echo 'second view uploaded succesfully';  
 }		








                               

 
    
   
           
           
      
         
           
           
           
           
   

 

 

  if ($errorMessages) {
        displayForm($errorMessages, $missingFields, $product1);
   } else {
        $product1->post1();
       displayThanks();
    }
  }

function displayThanks() {
    
     echo "process complete";
    //displayPageHeader("Your post has been submitted, it will be live in a moment!");
    ?> 
      <?php
       
    }
    ?> 

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
        <div id="hideme" class="themeTitle"></div>
        <div class="themeName"></div>
        <div class="images style">
            <a href="bootstrap/themes/css/#" name="bootshop"><img src="bootstrap/themes/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>
            <a href="bootstrap/themes/css/#" name="businessltd"><img src="bootstrap/themes/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>
        </div>
        <div class="themeName"></div>
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