<?php
require_once 'config.php';
$error = $user = $pass = "";
if(session_status() == 2){
    echo "You're already logged in mate";
} else {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);
    if ($user == "" || $pass == ""){
        $error = "Not all fields were entered<br>";       
    } else {
      $result = queryMySQL("SELECT userName FROM users WHERE Username='$user'");    
      if ($result->num_rows != 0) {
          echo 'User already exits of this name haha';
      } else { 
          $_SESSION['user'] = $user;
          $_SESSION['pass'] = $pass;
          $query = queryMysql("INSERT INTO users (userName, password) VALUES ('$user', '$pass')");
          echo 'YOUVE SIGNED UP LAD';
      }
    }
}
echo "</div>"
?>