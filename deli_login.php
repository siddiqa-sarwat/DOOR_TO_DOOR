<?php
$is_invalid=false;
if($_SERVER["REQUEST_METHOD"]==="POST"){
    
    $mysqli=require __DIR__ . "/database.php";
    
    $sql=sprintf("SELECT * FROM signup 
                WHERE email = '%s'",
                $mysqli->real_escape_string($_POST["email"]));
                
                $result=$mysqli->query($sql);
                
                $user = $result->fetch_assoc();
                
                if($user){
                    if(password_verify($_POST["password"], $user["password_hash"])){
                        
                        session_start();

                        session_regenerate_id();

                        $_SESSION["user_id"]=$user["id"];

                        header("Location:delivery_option.php");
                        exit;

                    }    
                }
                
                $is_invalid=true;
}

?>



<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="signup.css">
  <title>Login Form </title>
</head>
  <div class="login-wrapper">

    <form class="form" method="post">
      
      
      <h2>Login</h2>


      <?php
        if($is_invalid):?>
        <em>Invalid Login</em>
        <?php endif;  ?>



      <div class="input-group">
          <label for="email">Email</label>
        <input type="email" name="email" id="email"
        value="<?=htmlspecialchars($_POST["email"]?? "") ?>">
      </div>


      <div class="input-group">
          <label for="password">Password</label>
        <input type="password" name="password" id="password">
      </div>



    
      <input type="submit" value="Login" class="submit-btn">
    


      </form>
    </div>
  </div>
</body>
</html>