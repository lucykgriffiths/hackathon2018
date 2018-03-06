<!--Useful methods and connection to sql database-->
<?php
//add in details of sql database
 $db_host = "sql2.freemysqlhosting.net";
 $db_username = "sql2224423";
 $db_password = "uL9*tN5!";
 $db_database = "sql2224423";
 
 //creates connection to sql database
 $conn = new mysqli($db_host, $db_username, $db_password, $db_database);
    if($conn -> connect_error) {
        die ("Connection failed: ". $conn -> connect_error);
    }
    echo "<br>";
            
 //ends a user session
 function destroySession() {
    $_SESSION=array();
    if (session_id() != "" || isset($_COOKIE[session_name()])){
      setcookie(session_name(), '', time()-2592000, '/');
    }
    session_destroy();
  }
  
  //strips a string
  function sanitizeString($var) {
    global $conn;
    $var = strip_tags($var);
    $var = htmlentities($var);
    $var = stripslashes($var);
    return $conn->real_escape_string($var);
  }
  
  //allows you to create an sql query
  function queryMysql($query) {
    global $conn;
    $result = $conn->query($query);
    if (!$result) { 
        die($conn->error);
    }
    return $result; 
  }
?>