<?php
  require_once 'config.php';
  $error = $user = $pass = "";
  $loggedIn = false;
  if (isset($_POST['user']))
  {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);
    if ($user == "" || $pass == ""){
        $error = "Not all fields were entered<br>";       
    } else {
      $result = queryMySQL("SELECT userName, password FROM users WHERE Username='$user' AND Password='$pass'");    
      if ($result->num_rows == 0) {
          $error = "<span class='error'>Username/Password incorrect</span><br><br>";
      } else   { 
          $_SESSION['user'] = $user;
          $_SESSION['pass'] = $pass;
          $loggedIn = true;
          header('Location: HomePage.html'); 
      }
    }
  }
  echo $loggedIn;
//   echo <<<_END
//    <form method='post' action='HomePage.php'>$error
//    <span class='fieldname fieldnamepadding'>Username: </span><input type='text'
//      maxlength='255' name='user' value='$user'><br>
//    <span class='fieldname fieldnamepadding'>Password: </span><input type='password'
//      maxlength='255' name='pass' value='$pass'> </br>
//    <input type='submit' value='Login'></form>       
//_END;
//   
    echo "</div>"
 ?> 
