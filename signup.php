
<?php
$showAlert= false;
$showError= false;
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  
  include 'dbconnect.php';
  
  $email = $_POST["email"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  $username = $_POST["username"];
  $phone = $_POST["phone"];

  if (($password==$cpassword))
   {
    $sql = "INSERT INTO `signup` (`email`, `username`, `password`, `phone`, `cpassword`, `date`) 
         VALUES ('$email', '$username', '$password', '$phone', '$cpassword', current_timestamp())";
         $result = mysqli_query($conn,$sql);
   if ($result) 
   {
      $showAlert= true;
  }
    }
    else {
      $showError= "you password not match";
    }
}
?>


<!DOCTYPE html>

<html>
<title>signup</title>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>signup</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
  </head>
  <body>
  
    <section id="header">
      <nav class="navbar navbar-expand-lg navbar-light" style="background-image: linear-gradient(to top,#33ccff,#e6f9ff)";>
        <a class="navbar-brand" href="assignment.php"><img class="rounded" src="logo1.png" alt="logo" height="50px" width="45px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto pr-4" id="con">
            <li class="nav-item  pr-4">
              <a class="nav-link font-weight-bold" href="#" id="text1">Browse Fundarise</a>
            </li>
            <li class="nav-item  pr-4">
              <a class="nav-link font-weight-bold" href="" data-toggle="modal" data-target="#myModal" id="text2">Fundarise For</a>
            </li>
          </ul>
            <ul class="navbar-nav ml-auto" id="con">
               <li class="nav-link pr-4">
              <a href="login.php" class="btn btn-primary btn-lg active font-weight-bold" role="button" aria-pressed="true">login</a>
          </li></ul>
        </div>
      </nav>
    
    </section>
    
<?php
if ($showAlert) 
{
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success!</strong> You can now login.

</div>';
}
if ($showError) 
{
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Error!</strong> '. $showError.'

</div>';
}
?>
    
  
    <div class="center">

    
      <h1>Signup</h1>
      <form action="signup.php" method="POST">
        
        <div class="txt_field">
          <input maxlength="20" type="text" name="username" required>
          <span></span>
          <label>UserName</label>
        </div><div class="txt_field">
          <input type="email" name="email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input maxlength="22" type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="txt_field">
          <input type="password" name="cpassword" required>
          <span></span>
          <label>confirm Password</label>
        </div>
        <div class="txt_field">
          <input type="tel" name="phone" required>
          <span></span>
          <label>phone number</label>
        </div>
        <div class="loginbutton"><button type="submit"><!--<input type="submit" value="Login">//-->
         
          Signup
        
       </button></div>
        <div class="signup_link">
          Already a member? <a href="login.php">Signin</a>
        </div>
      </form>
    </div>
   
    
     
    
    

  </body>
</html>
  
     
  </body>
</html>