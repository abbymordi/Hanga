<?php
             
require_once "config.php";

             
abstract class DataObject {
             
  protected $data = array();
             
  public function __construct( $data ) {
    foreach ( $data as $key =>$value ) {
      if ( array_key_exists( $key, $this->data ) ) $this->data[$key] = $value;
    }
   
  }
             
  public function getValue( $field ) {
    if ( array_key_exists( $field, $this->data ) ) {
     return $this->data[$field];
    } else {
     die( "<p>Field was not found</p>" );
    }
  }
             
  public function getValueEncoded( $field ) {
    return htmlspecialchars( $this->getValue( $field ) );
  }
             
  protected function connect() {
    
      $dsn = "mysql:host=localhost;dbname=rej";
      $username = "root";
      $password = "zim99harare";
    
$conn = new PDO( $dsn, $username, $password ); 
    try {
      $conn = new PDO( $dsn, $username, $password );
      $conn->setAttribute( PDO::ATTR_PERSISTENT, true );
      $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    } catch ( PDOException $e ) {
    die( "Connection 1: " . $e->getMessage() );
    }
             
   return $conn;
  }
   
  
    
    
    
    
  
  
  
  
  
  
  
  protected function disconnect( $conn ) {
    $conn = "";
  }
}
             
?> 
