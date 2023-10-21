<?php
             
require_once "DataObject.class.php";
             
class LogEntry extends DataObject {
             
  protected $data = array(
    "memberId" =>  "",
    "topicPage" =>  "",
    "lastAccess" =>  "",
    "numVisits" =>  ""
  );
             
  public static function getLogEntries( $memberId ) {
    $conn = parent::connect();
    $sql = "SELECT * FROM " . "visitlog" . " WHERE memberId = :memberId 
ORDER BY lastAccess DESC";
             
    try {
      $st = $conn->prepare( $sql );
      $st->bindValue( ":memberId", $memberId, PDO::PARAM_INT );
      $st->execute();
      $logEntries = array();
      foreach ( $st->fetchAll() as $row ) {
        $logEntries[] = new LogEntry( $row );
      }
      parent::disconnect( $conn );
      return $logEntries;
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e->getMessage() );
    }
  }
   public function record() {
    $conn = parent::connect();
    $sql = "SELECT * FROM " . "visitlog" . " WHERE memberId = :memberId 
AND topicPage = :topicPage";
          
    try {
      $st = $conn-> prepare( $sql );
      $st-> bindValue( ":memberId", $this-> data["memberId"], PDO::PARAM_INT );
      $st-> bindValue( ":topicPage", $this-> data["topicPage"], PDO::PARAM_STR );
      $st-> execute();
          
      if ( $st-> fetch() ) {
        $sql = "UPDATE " . "visitlog" . " SET  numVisits = numVisits + 1 
WHERE memberId = :memberId AND topicPage = :topicPage";
        $st = $conn-> prepare( $sql );
        $st-> bindValue( ":memberId", $this-> data["memberId"], PDO::PARAM_INT );
        $st-> bindValue( ":topicPage", $this-> data["topicPage"], PDO::PARAM_STR );
        $st-> execute();
      } else {
        $sql = "INSERT INTO " ."visitlog" . " ( memberId, topicPage, 
numVisits ) VALUES ( :memberId, :topicPage, 1 )";
        $st = $conn-> prepare( $sql );
        $st-> bindValue( ":memberId", $this-> data["memberId"], PDO::PARAM_INT );
        $st-> bindValue( ":topicPage", $this-> data["topicPage"], PDO::PARAM_STR );
        $st-> execute();
      }
          
      parent::disconnect( $conn );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e-> getMessage() );
    }
  }
  
 public static function deleteAllForStudent( $memberId ) {
    $conn = parent::connect();
    $sql = "DELETE FROM " . "visitlog". " WHERE memberId = :memberId";
          
    try {
      $st = $conn-> prepare( $sql );
      $st-> bindValue( ":memberId", $memberId, PDO::PARAM_INT );
      $st-> execute();
      parent::disconnect( $conn );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e-> getMessage() );
    }
  }    
  
  
  
  
  
  
  
  
}
             
?>