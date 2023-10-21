<?php



require_once "DataObject.class.php";

class Product1 extends DataObject {
             
  
     protected $data = array(
         
    "sellerId" =>"",
    "name" =>"",     
    "productCode" =>"",
    "category" =>  "",
    "productName" =>  "",
    "price" =>  "",
    "productDesc" =>  "",
    "mainPic" =>  "",
    "firstView" =>  "",
    "secondView" =>  "",
    "city" =>  "",
    "province" => "",
    "sellerPhone" => "",
    "sellerEmail" => "",
    "postedDate" => "",
    "title" =>  "",
    "phone" => "",
    "email" => "",
    "lastName" => "",
        
    "bio" => "",
    "profile" => "",  
    "password" => "",    
  );

   public static function getProducts1( $startRow, $numRows, $order ) {
    $conn = parent::connect();
    $sql = "SELECT SQL_CALC_FOUND_ROWS  * FROM " . "product1" . "  ORDER BY 
$order DESC LIMIT :startRow, :numRows ";
             
    try {
      $st = $conn->prepare( $sql );
      $st->bindValue( ":startRow", $startRow, PDO::PARAM_INT );
      $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
      $st->execute();
      
       $products1 = array();
      foreach ( $st->fetchAll() as $row ) {
        $products1[] = new Product1( $row );
      }
      $st = $conn->query( "SELECT found_rows() AS totalRows" );
      $row = $st->fetch();
      parent::disconnect( $conn );
      return array( $products1, $row["totalRows"] );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "get products1: " . $e->getMessage() );
    }
  }  
   
  
  public static function getProducts2( $startRow, $numRows, $order ) {
    $conn = parent::connect();
    $sql = "SELECT SQL_CALC_FOUND_ROWS  * FROM " . "product1" . "  ORDER BY 
$order  LIMIT :startRow, :numRows ";
             
    try {
      $st = $conn->prepare( $sql );
      $st->bindValue( ":startRow", $startRow, PDO::PARAM_INT );
      $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
      $st->execute();
      
       $products1 = array();
      foreach ( $st->fetchAll() as $row ) {
        $products1[] = new Product1( $row );
      }
      $st = $conn->query( "SELECT found_rows() AS totalRows" );
      $row = $st->fetch();
      parent::disconnect( $conn );
      return array( $products1, $row["totalRows"] );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "get products1: " . $e->getMessage() );
    }
  }   
  
 
  
  
  
  
  
  
  
  
  
  
  
  
  
 public static function getUserProducts( $sellerId ) {
    $conn = parent::connect();
   

    $sql = "SELECT  * FROM " . "product1" . " WHERE sellerId = :sellerId 
ORDER BY productCode DESC";
             
    try {
      $st = $conn->prepare( $sql );
      $st->bindValue( ":sellerId", $sellerId , PDO::PARAM_INT );
      $st->execute();
      $userproducts = array();
      foreach ( $st->fetchAll() as $row ) {
       
$userproducts[] = new Product1( $row );
      }
      parent::disconnect( $conn );
      return $userproducts;
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "User Product Query failed: " . $e->getMessage() );
    }
  }
  
 public static function search( $startRow, $numRows, $order ) {
    $conn = parent::connect();
    $search = preg_replace ("/[^ \'\-a-zA-Z0-9]/", "", $_POST["search"]);
    
    $sql = "SELECT SQL_CALC_FOUND_ROWS  * FROM " . "product1" . " WHERE province LIKE '%$search%' OR sellerId LIKE '%$search%'  OR productCode LIKE '%$search%' OR price LIKE '%$search%'
    OR category LIKE '%$search%'  OR productName LIKE '%$search%'  OR productDesc LIKE '%$search%'  OR province LIKE '%$search%'  OR city LIKE '%$search%'
ORDER BY $order LIMIT :startRow, :numRows ";
             
    try {
      $st = $conn->prepare( $sql );
      $st->bindValue( ":startRow", $startRow, PDO::PARAM_INT );
      $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
      $st->execute();
      
       $products1 = array();
      foreach ( $st->fetchAll() as $row ) {
        $products1[] = new Product1( $row );
      }
      $st = $conn->query( "SELECT found_rows() AS totalRows" );
      $row = $st->fetch();
      parent::disconnect( $conn );
      return array( $products1, $row["totalRows"] );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "get products1: " . $e->getMessage() );
    }
  }    
  
  
  
  
  
  public static function getGauteng( $startRow, $numRows, $order ) {
    $conn = parent::connect();
    $sql = "SELECT SQL_CALC_FOUND_ROWS  * FROM " . "product1" . " WHERE province = 'gauteng'  ORDER BY 
$order LIMIT :startRow, :numRows ";
             
    try {
      $st = $conn->prepare( $sql );
      $st->bindValue( ":startRow", $startRow, PDO::PARAM_INT );
      $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
      $st->execute();
      
       $products1 = array();
      foreach ( $st->fetchAll() as $row ) {
        $products1[] = new Product1( $row );
      }
      $st = $conn->query( "SELECT found_rows() AS totalRows" );
      $row = $st->fetch();
      parent::disconnect( $conn );
      return array( $products1, $row["totalRows"] );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "get products1: " . $e->getMessage() );
    }
  }   
  
   public static function getnorthernCape( $startRow, $numRows, $order ) {
    $conn = parent::connect();
    $sql = "SELECT SQL_CALC_FOUND_ROWS  * FROM " . "product1" . " WHERE province = 'northernCape'  ORDER BY 
$order LIMIT :startRow, :numRows ";
             
    try {
      $st = $conn->prepare( $sql );
      $st->bindValue( ":startRow", $startRow, PDO::PARAM_INT );
      $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
      $st->execute();
      
       $products1 = array();
      foreach ( $st->fetchAll() as $row ) {
        $products1[] = new Product1( $row );
      }
      $st = $conn->query( "SELECT found_rows() AS totalRows" );
      $row = $st->fetch();
      parent::disconnect( $conn );
      return array( $products1, $row["totalRows"] );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "get products1: " . $e->getMessage() );
    }
  }   
  
   public static function getLimpopo( $startRow, $numRows, $order ) {
    $conn = parent::connect();
    $sql = "SELECT SQL_CALC_FOUND_ROWS  * FROM " . "product1" . " WHERE province = 'limpopo'  ORDER BY 
$order LIMIT :startRow, :numRows ";
             
    try {
      $st = $conn->prepare( $sql );
      $st->bindValue( ":startRow", $startRow, PDO::PARAM_INT );
      $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
      $st->execute();
      
       $products1 = array();
      foreach ( $st->fetchAll() as $row ) {
        $products1[] = new Product1( $row );
      }
      $st = $conn->query( "SELECT found_rows() AS totalRows" );
      $row = $st->fetch();
      parent::disconnect( $conn );
      return array( $products1, $row["totalRows"] );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "get products1: " . $e->getMessage() );
    }
  }   
  
  public static function getfreeState( $startRow, $numRows, $order ) {
    $conn = parent::connect();
    $sql = "SELECT SQL_CALC_FOUND_ROWS  * FROM " . "product1" . " WHERE province = 'freeState' ORDER BY 
$order LIMIT :startRow, :numRows ";
             
    try {
      $st = $conn->prepare( $sql );
      $st->bindValue( ":startRow", $startRow, PDO::PARAM_INT );
      $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
      $st->execute();
      
       $products1 = array();
      foreach ( $st->fetchAll() as $row ) {
        $products1[] = new Product1( $row );
      }
      $st = $conn->query( "SELECT found_rows() AS totalRows" );
      $row = $st->fetch();
      parent::disconnect( $conn );
      return array( $products1, $row["totalRows"] );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "get products1: " . $e->getMessage() );
    }
  }   
  
   public static function geteasternCape( $startRow, $numRows, $order ) {
    $conn = parent::connect();
    $sql = "SELECT SQL_CALC_FOUND_ROWS  * FROM " . "product1" . " WHERE province = 'easternCape' ORDER BY 
$order LIMIT :startRow, :numRows ";
             
    try {
      $st = $conn->prepare( $sql );
      $st->bindValue( ":startRow", $startRow, PDO::PARAM_INT );
      $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
      $st->execute();
      
       $products1 = array();
      foreach ( $st->fetchAll() as $row ) {
        $products1[] = new Product1( $row );
      }
      $st = $conn->query( "SELECT found_rows() AS totalRows" );
      $row = $st->fetch();
      parent::disconnect( $conn );
      return array( $products1, $row["totalRows"] );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "get products1: " . $e->getMessage() );
    }
  }   
  
   public static function getkzn( $startRow, $numRows, $order ) {
    $conn = parent::connect();
    $sql = "SELECT SQL_CALC_FOUND_ROWS  * FROM " . "product1" . " WHERE province = 'kzn' ORDER BY 
$order LIMIT :startRow, :numRows ";
             
    try {
      $st = $conn->prepare( $sql );
      $st->bindValue( ":startRow", $startRow, PDO::PARAM_INT );
      $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
      $st->execute();
      
       $products1 = array();
      foreach ( $st->fetchAll() as $row ) {
        $products1[] = new Product1( $row );
      }
      $st = $conn->query( "SELECT found_rows() AS totalRows" );
      $row = $st->fetch();
      parent::disconnect( $conn );
      return array( $products1, $row["totalRows"] );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "get products1: " . $e->getMessage() );
    }
  }   
  
   public static function getmpumalanga( $startRow, $numRows, $order ) {
    $conn = parent::connect();
    $sql = "SELECT SQL_CALC_FOUND_ROWS  * FROM " . "product1" . " WHERE province = 'mpumalanga' ORDER BY 
$order LIMIT :startRow, :numRows ";
             
    try {
      $st = $conn->prepare( $sql );
      $st->bindValue( ":startRow", $startRow, PDO::PARAM_INT );
      $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
      $st->execute();
      
       $products1 = array();
      foreach ( $st->fetchAll() as $row ) {
        $products1[] = new Product1( $row );
      }
      $st = $conn->query( "SELECT found_rows() AS totalRows" );
      $row = $st->fetch();
      parent::disconnect( $conn );
      return array( $products1, $row["totalRows"] );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "get products1: " . $e->getMessage() );
    }
  }   
  
   public static function getWesternCape( $startRow, $numRows, $order ) {
    $conn = parent::connect();
    $sql = "SELECT SQL_CALC_FOUND_ROWS  * FROM " . "product1" . " WHERE province = 'westernCape' ORDER BY 
$order LIMIT :startRow, :numRows ";
             
    try {
      $st = $conn->prepare( $sql );
      $st->bindValue( ":startRow", $startRow, PDO::PARAM_INT );
      $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
      $st->execute();
      
       $products1 = array();
      foreach ( $st->fetchAll() as $row ) {
        $products1[] = new Product1( $row );
      }
      $st = $conn->query( "SELECT found_rows() AS totalRows" );
      $row = $st->fetch();
      parent::disconnect( $conn );
      return array( $products1, $row["totalRows"] );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "get products1: " . $e->getMessage() );
    }
  }   
  
  public static function getnorthWest( $startRow, $numRows, $order ) {
    $conn = parent::connect();
    $sql = "SELECT SQL_CALC_FOUND_ROWS  * FROM " . "product1" . " WHERE province = 'northWest' ORDER BY 
$order LIMIT :startRow, :numRows ";
             
    try {
      $st = $conn->prepare( $sql );
      $st->bindValue( ":startRow", $startRow, PDO::PARAM_INT );
      $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
      $st->execute();
      
       $products1 = array();
      foreach ( $st->fetchAll() as $row ) {
        $products1[] = new Product1( $row );
      }
      $st = $conn->query( "SELECT found_rows() AS totalRows" );
      $row = $st->fetch();
      parent::disconnect( $conn );
      return array( $products1, $row["totalRows"] );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "get products1: " . $e->getMessage() );
    }
  }    
  
  
  
  
  
  
  
  public static function getbyWomen( $startRow, $numRows, $order ) {
    $conn = parent::connect();
    $sql = "SELECT SQL_CALC_FOUND_ROWS  * FROM " . "product1" . " WHERE category = 'women' ORDER BY 
$order LIMIT :startRow, :numRows ";
             
    try {
      $st = $conn->prepare( $sql );
      $st->bindValue( ":startRow", $startRow, PDO::PARAM_INT );
      $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
      $st->execute();
      
       $products1 = array();
      foreach ( $st->fetchAll() as $row ) {
        $products1[] = new Product1( $row );
      }
      $st = $conn->query( "SELECT found_rows() AS totalRows" );
      $row = $st->fetch();
      parent::disconnect( $conn );
      return array( $products1, $row["totalRows"] );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "get products1: " . $e->getMessage() );
    }
  }   
  
  public static function getbykids( $startRow, $numRows, $order ) {
    $conn = parent::connect();
    $sql = "SELECT SQL_CALC_FOUND_ROWS  * FROM " . "product1" . " WHERE category = 'kids' ORDER BY 
$order LIMIT :startRow, :numRows ";
             
    try {
      $st = $conn->prepare( $sql );
      $st->bindValue( ":startRow", $startRow, PDO::PARAM_INT );
      $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
      $st->execute();
      
       $products1 = array();
      foreach ( $st->fetchAll() as $row ) {
        $products1[] = new Product1( $row );
      }
      $st = $conn->query( "SELECT found_rows() AS totalRows" );
      $row = $st->fetch();
      parent::disconnect( $conn );
      return array( $products1, $row["totalRows"] );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "get products1: " . $e->getMessage() );
    }
  }   
  
  public static function getbyshoes( $startRow, $numRows, $order ) {
    $conn = parent::connect();
    $sql = "SELECT SQL_CALC_FOUND_ROWS  * FROM " . "product1" . " WHERE category = 'shoes' ORDER BY 
$order LIMIT :startRow, :numRows ";
             
    try {
      $st = $conn->prepare( $sql );
      $st->bindValue( ":startRow", $startRow, PDO::PARAM_INT );
      $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
      $st->execute();
      
       $products1 = array();
      foreach ( $st->fetchAll() as $row ) {
        $products1[] = new Product1( $row );
      }
      $st = $conn->query( "SELECT found_rows() AS totalRows" );
      $row = $st->fetch();
      parent::disconnect( $conn );
      return array( $products1, $row["totalRows"] );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "get products1: " . $e->getMessage() );
    }
  }   
  
   public static function getbyjewellery( $startRow, $numRows, $order ) {
    $conn = parent::connect();
    $sql = "SELECT SQL_CALC_FOUND_ROWS  * FROM " . "product1" . " WHERE category = 'jewellery' ORDER BY 
$order LIMIT :startRow, :numRows ";
             
    try {
      $st = $conn->prepare( $sql );
      $st->bindValue( ":startRow", $startRow, PDO::PARAM_INT );
      $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
      $st->execute();
      
       $products1 = array();
      foreach ( $st->fetchAll() as $row ) {
        $products1[] = new Product1( $row );
      }
      $st = $conn->query( "SELECT found_rows() AS totalRows" );
      $row = $st->fetch();
      parent::disconnect( $conn );
      return array( $products1, $row["totalRows"] );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "get products1: " . $e->getMessage() );
    }
  }   
  
   public static function getbyaccessories( $startRow, $numRows, $order ) {
    $conn = parent::connect();
    $sql = "SELECT SQL_CALC_FOUND_ROWS  * FROM " . "product1" . " WHERE category = 'accessories' ORDER BY 
$order LIMIT :startRow, :numRows ";
             
    try {
      $st = $conn->prepare( $sql );
      $st->bindValue( ":startRow", $startRow, PDO::PARAM_INT );
      $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
      $st->execute();
      
       $products1 = array();
      foreach ( $st->fetchAll() as $row ) {
        $products1[] = new Product1( $row );
      }
      $st = $conn->query( "SELECT found_rows() AS totalRows" );
      $row = $st->fetch();
      parent::disconnect( $conn );
      return array( $products1, $row["totalRows"] );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "get products1: " . $e->getMessage() );
    }
  }   
  
   public static function getbyPrice( $startRow, $numRows, $order ) {
    $conn = parent::connect();
    $low = "<100";
    
    $sql = "SELECT SQL_CALC_FOUND_ROWS  * FROM " . "product1" . " WHERE price  <=  '100'     ORDER BY 
$order LIMIT :startRow, :numRows ";
             
    try {
      $st = $conn->prepare( $sql );
      $st->bindValue( ":startRow", $startRow, PDO::PARAM_INT );
      $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
      $st->execute();
      
       $products1 = array();
      foreach ( $st->fetchAll() as $row ) {
        $products1[] = new Product1( $row );
      }
      $st = $conn->query( "SELECT found_rows() AS totalRows" );
      $row = $st->fetch();
      parent::disconnect( $conn );
      return array( $products1, $row["totalRows"] );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "get products1: " . $e->getMessage() );
    }
  }   
  
  
  
  
  
  
   public static function getbymen( $startRow, $numRows, $order ) {
    $conn = parent::connect();
    $sql = "SELECT SQL_CALC_FOUND_ROWS  * FROM " . "product1" . " WHERE category = 'men' ORDER BY 
$order LIMIT :startRow, :numRows ";
             
    try {
      $st = $conn->prepare( $sql );
      $st->bindValue( ":startRow", $startRow, PDO::PARAM_INT );
      $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
      $st->execute();
      
       $products1 = array();
      foreach ( $st->fetchAll() as $row ) {
        $products1[] = new Product1( $row );
      }
      $st = $conn->query( "SELECT found_rows() AS totalRows" );
      $row = $st->fetch();
      parent::disconnect( $conn );
      return array( $products1, $row["totalRows"] );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "get products1: " . $e->getMessage() );
    }
  }   
  
  public static function getSeller( $sellerId ) {
    $conn = parent::connect();
    $sql = "SELECT * FROM " . "product1" . " WHERE sellerId= :sellerId";
             
    try {
      $st = $conn->prepare( $sql );
      $st->bindValue( ":sellerId", $sellerId, PDO::PARAM_INT );
      $st->execute();
      $row = $st->fetch();
      parent::disconnect( $conn );
      if ( $row ) return new Product1( $row );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "SellerId Query failed: " . $e->getMessage() );
    }
  }
  
  
   public static function getByProductCode( $productCode ) {
    $conn = parent::connect();
    $sql = "SELECT * FROM " . "product1" . " WHERE productCode = :productCode";
          
    try {
      $st = $conn->prepare( $sql );
    
      $st->bindValue( ":productCode", $productCode, PDO::PARAM_STR );
      $st->execute();
      $row = $st-> fetch();
      parent::disconnect( $conn );
      if ( $row ) return new Product1( $row );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e->getMessage() );
    }
  }
          
  public static function getBysellerEmail( $sellerEmail) {
    $conn = parent::connect();
    $sql = "SELECT * FROM " . "product1" . " WHERE sellerEmail = 
:sellerEmail";
          
    try {
    $st = $conn->prepare( $sql );
      $st->bindValue( ":sellerEmail", $sellerEmail, PDO::PARAM_STR );
      $st->execute();
      $row = $st->fetch();
      parent::disconnect( $conn );
      if ( $row ) return new Product1( $row );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e->getMessage() );
    }
  }  
  
  
  
 
  
   
  
    public function getGenderString() {
    return ( $this->data["gender"] == "f" ) ? "Female" : "Male";
  }
//    public function getgradeString() {
 //   return ( $this->data["grade"] == "9" ) ? "9" : "10";
//  }
                       
  
public function post1() {
    $conn = parent::connect();
    date_default_timezone_set('Africa/Harare');
    $table1 = "product1";
    
  
    $sellerId = $_SESSION["member"]-> getValue( "id" );
    $name = $_SESSION["member"]-> getValue( "firstName" );
    $productCode =   md5(rand());
    $category =  $_POST['category'];
    $productName =  $_POST['productName'];
    $price = $_POST['price'];
    $productDesc =  $_POST['productDesc'];
    $mainPic =  addslashes($_FILES['mainPic']['name']);
    $firstView = addslashes($_FILES['firstView']['name']);
    $secondView =  addslashes($_FILES['secondView']['name']);
    $city = $_POST['city'];
    $province =  $_POST['province'];
    $sellerPhone =  $_POST['sellerPhone'];
    $sellerEmail = $_POST['sellerEmail'];
    $postedDate = date("c");
    $title = $_SESSION["member"]-> getValue( "title") ;
    $phone = $_SESSION["member"]-> getValue( "phone") ;
    $email =  $_SESSION["member"]-> getValue( "email") ;
    $lastName = $_SESSION["member"]-> getValue( "lastName") ;
    $bio = $_SESSION["member"]-> getValue( "bio" );
    $profile = $_SESSION["member"]-> getValue( "profile" );
    $password = $_SESSION["member"]-> getValue( "password" );
    
    
        $sql = "INSERT INTO " . "product1" .  "(
              
              sellerId,
              name,
              productCode,
              category,
              productName,
              price,
              productDesc,
              mainPic,
             firstView,
             secondView,
               city,
             province,
             sellerPhone,
             sellerEmail,
             postedDate,
             title,
             phone,
             email,
             lastName,
             bio,
             profile,
             password
            
             
            )
           VALUES (
              '$sellerId',
              '$name',   
              '$productCode',
              '$category ',
              '$productName',
              '$price ',
              '$productDesc',
              '$mainPic',
              '$firstView',
              '$secondView',    

              '$city',
              '$province',
              '$sellerPhone',
              '$sellerEmail',
             
              '$postedDate',
              '$title',
              '$phone',
              '$email',
              '$lastName',
               '$bio',
               '$profile',    
               '$password'   









)";           
      
      
     $result = $conn->query($sql);
       if ($result){
           
         
   $to = $sellerEmail;
   
   $subject = "activate registration ";
   
   $header = "from:Hanga Shopping<hangashopping@gmail.com>";
   
   $message = "Your post have been received , it will live shortly ";
   
  
   
   $sentmail = mail($to,$subject,$message,$header);
    
   
   
        }
    
    else {
   echo "invalid or email not found ";
    }
   
    if($sentmail){
        echo "Your registration activation has been sent to your email";
    }
    
    else{
        echo"your emails could not be used,check them and try again";
        }
     
      
      
    
   
}

    
  
  public function update() {
    $conn = parent::connect();
    $passwordSql = $this-> data["password"] ? "password = password(:password),

": "";
   $sql = "UPDATE " . "members" . " SET
             
                firstName = :firstName,    
                lastName = :lastName,
                email = :email,
                $passwordSql
               
            
                phone = :phone,
                 bio = :bio
             
             
            WHERE id = :id ";
          
    try {
      $st = $conn-> prepare( $sql );
      $st-> bindValue( ":id", $this-> data["id"], PDO::PARAM_INT );
      $st-> bindValue( ":email", $this-> data["email"], PDO::PARAM_STR );
      if ( $this-> data["password"] ) $st-> bindValue( ":password", $this-> data["password"], PDO::PARAM_STR );
      $st-> bindValue( ":firstName", $this-> data["firstName"], PDO::PARAM_STR );
      $st-> bindValue( ":lastName", $this-> data["lastName"], PDO::PARAM_STR );
     
      $st-> bindValue( ":phone", $this-> data["phone"], PDO::PARAM_STR );
    
      $st-> bindValue( ":bio", $this-> data["bio"], PDO::PARAM_STR );
     
      $st-> execute();
      parent::disconnect( $conn );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed 7: " . $e-> getMessage() );
    }
  }
          
  public function delete() {
    $conn = parent::connect();
    $sql = "DELETE FROM " . "members" . " WHERE id = :id";
          
    try {
      $st = $conn-> prepare( $sql );
      $st-> bindValue( ":id", $this-> data["id"], PDO::PARAM_INT );
      $st-> execute();
      parent::disconnect( $conn );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e-> getMessage() );
    }
  }   
  
  
  
  
  
  
  
  
  
  
  
 public function authenticateMembers() {
    $conn = parent::connect();
 
    $sql = "SELECT * FROM " . "members" . " WHERE firstName  = :firstName   AND password = md5(:password)   ";
         
    try {
      $st = $conn-> prepare( $sql );
      $st-> bindValue( ":firstName", $this-> data["firstName"], PDO::PARAM_STR );
      $st-> bindValue( ":password", $this-> data["password"], PDO::PARAM_STR );
      $st-> execute();
      $row = $st-> fetch();
      parent::disconnect( $conn );
      if ( $row ) return new Member( $row );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Login Query failed : " . $e-> getMessage() );
    }
  }
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
   public function authenticate11() {
    $conn = parent::connect();
 
    $sql = "SELECT * FROM " . "tempStudents" . " WHERE username = :username   AND password = md5(:password) AND status = 'freemode' 
             AND grade = '11'    ";
         
    try {
      $st = $conn-> prepare( $sql );
      $st-> bindValue( ":username", $this-> data["username"], PDO::PARAM_STR );
      $st-> bindValue( ":password", $this-> data["password"], PDO::PARAM_STR );
      $st-> execute();
      $row = $st-> fetch();
      parent::disconnect( $conn );
      if ( $row ) return new Student( $row );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e-> getMessage() );
    }
  }

   public function authenticate10() {
   $conn = parent::connect();
   
    $sql = "SELECT * FROM " . "tempStudents" . " WHERE username = :username   AND password = md5(:password) AND status = 'freemode' 
             AND grade = '10'    ";
         
    try {
      $st = $conn-> prepare( $sql );
      $st-> bindValue( ":username", $this-> data["username"], PDO::PARAM_STR );
      $st-> bindValue( ":password", $this-> data["password"], PDO::PARAM_STR );
      $st-> execute();
      $row = $st-> fetch();
      parent::disconnect( $conn );
      if ( $row ) return new Student( $row );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e-> getMessage() );
    }
  
  }
  
  public function authenticateOlevel() {
   $conn = parent::connect();
   
    $sql = "SELECT * FROM " . "tempStudents" . " WHERE username = :username   AND password = md5(:password) AND status = 'freemode' 
             AND grade = 'Olevel'    ";
         
    try {
      $st = $conn-> prepare( $sql );
      $st-> bindValue( ":username", $this-> data["username"], PDO::PARAM_STR );
      $st-> bindValue( ":password", $this-> data["password"], PDO::PARAM_STR );
      $st-> execute();
      $row = $st-> fetch();
      parent::disconnect( $conn );
      if ( $row ) return new Student( $row );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e-> getMessage() );
    }
  
  }
  
  public function authenticate12() {
   $conn = parent::connect();
   
    $sql = "SELECT * FROM " . "tempStudents" . " WHERE username = :username   AND password = md5(:password) AND status = 'freemode' 
             AND grade = '12'    ";
         
    try {
      $st = $conn-> prepare( $sql );
      $st-> bindValue( ":username", $this-> data["username"], PDO::PARAM_STR );
      $st-> bindValue( ":password", $this-> data["password"], PDO::PARAM_STR );
      $st-> execute();
      $row = $st-> fetch();
      parent::disconnect( $conn );
      if ( $row ) return new Student( $row );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e-> getMessage() );
    }
  
  }
  
  
  
 
    public function ammendpass10() {
    $conn = parent::connect();
    $sql = "SELECT * FROM " . "students" . " WHERE  id = :id   AND username = :username  AND studentEmail = :studentEmail AND guardianEmail = :guardianEmail  AND status = 'paid'  AND grade = '10'       ";
         
    try {
      $st = $conn-> prepare( $sql );
      $st-> bindValue( ":id", $this-> data["id"], PDO::PARAM_INT );
      $st-> bindValue( ":username", $this-> data["username"], PDO::PARAM_STR );
      $st-> bindValue( ":studentEmail", $this-> data["studentEmail"], PDO::PARAM_STR );
      $st-> bindValue( ":guardianEmail", $this-> data["guardianEmail"], PDO::PARAM_STR );
   
      $st-> execute();
      $row = $st-> fetch();
      parent::disconnect( $conn );
      if ( $row ) return new Student( $row );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e-> getMessage() );
    }
  }
  
   public function ammendpass11() {
    $conn = parent::connect();
    $sql = "SELECT * FROM " . "tempStudents" . " WHERE  id = :id   AND username = :username  AND studentEmail = :studentEmail AND guardianEmail = :guardianEmail  AND status = 'paid'  AND grade = '12'       ";
         
    try {
      $st = $conn-> prepare( $sql );
      $st-> bindValue( ":id", $this-> data["id"], PDO::PARAM_INT );
      $st-> bindValue( ":username", $this-> data["username"], PDO::PARAM_STR );
      $st-> bindValue( ":studentEmail", $this-> data["studentEmail"], PDO::PARAM_STR );
      $st-> bindValue( ":guardianEmail", $this-> data["guardianEmail"], PDO::PARAM_STR );
   
      $st-> execute();
      $row = $st-> fetch();
      parent::disconnect( $conn );
      if ( $row ) return new Student( $row );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e-> getMessage() );
    }
  }
  
  
}
             
?> 

