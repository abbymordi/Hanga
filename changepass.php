<?php
      
      
require_once( "common.inc.php" );


checkLogin();
?>   




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>HANGA|change Password</title>
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
                        <li><a href="user.php">Home</a> <span class="divider">/</span></li>
                        <li class="active">Edit Password</li>
                    </ul>
                   	
                    <div class="well">
                        <?php
                        require_once( "common.inc.php" );


                        if (isset($_POST["action"]) and $_POST["action"] == "change") {
                            processForm();
                        } else {
                            displayForm(array(), array(), new Member(array()));
                        }

                        function displayForm($errorMessages, $missingFields, $member) {
                            displayPageHeader("");

                            if ($errorMessages) {
                                foreach ($errorMessages as $errorMessage) {
                                    echo $errorMessage;
                                }
                            } else {
                                ?> 


                            <?php } ?>       






                        <form class="form-horizontal"   action="changepass.php" method="post" enctype="multipart/form-data" >
                                <input type="hidden" name="action" value="change" /> 

                                <h4>Edit</h4>
                                 
                               
                               <div class="alert alert-block alert-error fade in">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                   For you to update your info it required you change/Re-enter all the following at once.
                                </div>
                              




                               

                               
                                  

                                     



                              

                             


     



                              <div class="control-group">
                                    <label class="control-label"  <?php echo $member->getValueEncoded("password") ?>  for="password1">Password <sup>*</sup></label>
                                    <div class="controls">
                                        <input type="password" name="password1" id="password1" placeholder="Password">
                                    </div>
                                </div>	  

                                <div class="control-group">
                                    <label class="control-label"  <?php if ($missingFields) echo 'class="error"' ?>  for="password2">Retype Password <sup>*</sup></label>
                                    <div class="controls">
                                        <input type="password" name="password2" id="password2" placeholder="retype Password">
                                    </div>
                                </div>  




                                <div class="control-group">
                                    <div class="controls">

                                        <input class="btn btn-large btn-success" type="submit" name="submitButton" id="submitButton" value="change" />
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
    $requiredFields = array( "password");
    $missingFields = array();
    $errorMessages = array();
 date_default_timezone_set('Africa/Harare');
 
    $member = new Member(array(
        
     
        
      
        
      
       "password" => ( isset($_POST["password1"]) and isset
                ($_POST["password2"]) and $_POST["password1"] == $_POST["password2"] ) ?
                preg_replace("/[^ \-\_a-zA-Z0-9]/", "", $_POST["password1"]) : "",
        
     
      
    ));



    foreach ($requiredFields as $requiredField) {
        if (!$member->getValue($requiredField)) {
            $missingFields[] = $requiredField;
        }
    }
    
    //if ($missingFields) {
       // $errorMessages[] = '<p class="error"> There were some fields you did not fill. Please complete them which are highlighted below and 
//click REGISTER to resend the form. </p>';
 //   } 
    
 

 
 

 
   
    
           
           
           
           
      
           
       
    if (!isset($_POST["password1"]) or ! isset($_POST["password2"]) or ! $_POST["password1"] or ! $_POST["password2"] or ( $_POST["password1"] !=
            $_POST["password2"] )) {
        $errorMessages[] = ' <p class="error" > Passwords do not match  </p> ';
    }
         
           
                          
 
  
           
           
           
      
         
           
           
           
           
   

   
   

   

  
 
   
   
   
   
    if ($errorMessages) {
        displayForm($errorMessages, $missingFields, $member);
    } else {
        $member->changepass();
        displayThanks();
    }
}

function displayThanks() {
    displayPageHeader("Your password has been altered succesfully");
    ?> 
     
        <?php
        displayPageFooter();
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
