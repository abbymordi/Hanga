<?php



require_once "DataObject.class.php";

class Member extends DataObject {
             
  
     protected $data = array(
         
    "id" =>"",
    "title" =>"",
    "firstName" =>  "",
    "lastName" =>  "",
    "email" =>  "",
    "password" =>  "",
    "bio" =>  "",
    "city" =>  "",
    "province" =>  "",
    "phone" =>  "",
    "profile" =>  "",     
    "status" => "",
    "joinDate" => ""
   
   
   
  );
    
   
 
             
 
             
  public static function getMembers( $startRow, $numRows, $order ) {
    $conn = parent::connect();
    $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM " . "members" . " ORDER BY 
$order LIMIT :startRow, :numRows";
             
    try {
      $st = $conn->prepare( $sql );
      $st->bindValue( ":startRow", $startRow, PDO::PARAM_INT );
      $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
      $st->execute();
      
       $members = array();
      foreach ( $st->fetchAll() as $row ) {
        $members[] = new Member( $row );
      }
      $st = $conn->query( "SELECT found_rows() AS totalRows" );
      $row = $st->fetch();
      parent::disconnect( $conn );
      return array( $members, $row["totalRows"] );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "get members: " . $e->getMessage() );
    }
  }
             
  public static function getMember( $id ) {
    $conn = parent::connect();
    $sql = "SELECT * FROM " . "members" . " WHERE id = :id";
             
    try {
      $st = $conn->prepare( $sql );
      $st->bindValue( ":id", $id, PDO::PARAM_INT );
      $st->execute();
      $row = $st->fetch();
      parent::disconnect( $conn );
      if ( $row ) return new Member( $row );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e->getMessage() );
    }
  }
   public static function getByPhone( $phone ) {
    $conn = parent::connect();
    $sql = "SELECT * FROM " . "members" . " WHERE phone = :phone";
          
    try {
      $st = $conn->prepare( $sql );
    
      $st->bindValue( ":phone", $phone, PDO::PARAM_STR );
      $st->execute();
      $row = $st-> fetch();
      parent::disconnect( $conn );
      if ( $row ) return new Member( $row );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e->getMessage() );
    }
  }
          
  public static function getByEmail( $email) {
    $conn = parent::connect();
    $sql = "SELECT * FROM " . "members" . " WHERE email = 
:email";
          
    try {
    $st = $conn->prepare( $sql );
      $st->bindValue( ":email", $email, PDO::PARAM_STR );
      $st->execute();
      $row = $st->fetch();
      parent::disconnect( $conn );
      if ( $row ) return new Member( $row );
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
                       
  
public function insert() {
    $conn = parent::connect();
    date_default_timezone_set('Africa/Harare');
    $table1 = "members";
    
  
    $title = addslashes($_POST['title']);
    $firstName = trim($_POST["firstName"]);
    $lastName =  addslashes($_POST['lastName']);
    $email =  addslashes($_POST['email']);
    $password = addslashes($_POST['password1']);
    $bio =   addslashes($_POST['bio']);
    $city =  addslashes($_POST['city']);
    $province =  addslashes($_POST['province']);
    $phone =   addslashes($_POST['phone']);
    $profile =  addslashes($_FILES['profile']['name']);
    $joinDate = date( "Y-m-d" );
    
   

        $sql = "INSERT INTO " . "members" .  "(
              
              title,
              firstName,
              lastName,
              email,
              password,
              bio,
              city,
             province,
              phone,
              profile,
              joinDate
             
             
            
             
            )
           VALUES (
              '$title',
              '$firstName',
              '$lastName',
              '$email',
              '$password',
              '$bio',    
              '$city',
              '$province',
              '$phone',
              '$profile',    
              '$joinDate'











)";           
      
      
     $result = $conn->query($sql);
       if ($result){
           
    
  $email1="hangashopping@gmail.com";         
           
   $to = $email;
   $to1 = $email1;
   
   $subject = "Activate registration ";
   $subject1 = "Registration Alert ";
     
   $header = "from:Hanga Shopping<hangashopping@gmail.com>";
     
   $header1 = "from:Hanga Shopping<hangashopping@gmail.com>";
     

   $message = "This email was sent to  $title   $lastName  to confirm registration @Hanga.Reply with confirm or not confimed "; 
   $message1 = "Registratin of another  member,$firstName $lastName from $province.Contact email:$email   ";
  
   
   $sentmail = mail($to,$subject,$message,$header);
   $sentmail1 = mail($to1,$subject1,$message1,$header1); 
   
   
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
 
    date_default_timezone_set('Africa/Harare');
    
    
  
    $id = $_SESSION["member"]-> getValue( "id" );
   
    $email =  $_POST['email'];
    $bio = $_POST['bio'];
   
    $phone = $_POST['phone'];
    
    $profile =  addslashes($_FILES['profile']['name']);


   $sql = "UPDATE members" . " SET   
       
          
       
              email = '$email', 
            
                bio = '$bio',

           
            
           
             
         
               
           phone =  '$phone',
    
             profile =  '$profile'" ."
               
             WHERE  id =  '$id'
             ";
          $result = $conn->query($sql);
       if ($result){
           
    
  echo "Table updated ";
   
   
        }
    
    else {
            die('Couldnot udate table:'. mysql_error());
    }
   
  
    
   
      
   
  }
          
 
   public function changepass() {
    $conn = parent::connect();
 
    date_default_timezone_set('Africa/Harare');
    
    
  
    $id = $_SESSION["member"]-> getValue( "id" );
   
    $password = addslashes($_POST['password1']);
   


   $sql = "UPDATE members" . " SET   
       
          
       
              password = '$password' 
            
                
           
            
           
             
         
               
       " ."
               
             WHERE  id =  '$id'
             ";
          $result = $conn->query($sql);
       if ($result){
           
    
  echo "password updated ";
   
   
        }
    
    else {
            die('Couldnot udate password:'. mysql_error());
    }
   
  
    
   
      
   
  }
          
  
  public function forgotpass() {
    $conn = parent::connect();
 
    date_default_timezone_set('Africa/Harare');
    
    
  
    $email = $_POST['email'];
   
   
   


    $sql = "SELECT * FROM " . "members" . " WHERE email = '$email' ";
    
    try {
    $st = $conn->prepare( $sql );
      $st->bindValue( ":email", $email, PDO::PARAM_STR );
      $st->execute();
      $row = $st->fetch();
      parent::disconnect( $conn );
    
      $fetchemail = $row['email'];
      $password = $row['password'];
      
    }
    catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e->getMessage() );
    }
      if ($email == $fetchemail){
          
      
          $to = $fetchemail;
          $subject = "Password";
          $message ="Your password is : $password.";
          $headers = "From  hangashopping@gmail.com";
          
          mail($to,$subject,$message,$headers);
          
          
          
      }
   else{
       
       
   echo 'invalid email';
       
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
 
    $sql = "SELECT * FROM " . "members" . " WHERE firstName  = :firstName   AND password = :password   ";
         
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

