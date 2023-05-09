<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
    header("LOCATION: signup.php");
    exit;
}
?>
<?php
$showAlert= false;
$showError= false;
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  
  include 'dbconnect.php';
  
  $name = $_POST["name"];
  $email = $_POST["email"];
  $title = $_POST["title"];
  $description = $_POST["description"];
  $category = $_POST["category"];
  
  $photo1 = $_FILES["photo1"]["name"];
  $photo2 = $_FILES["photo2"]["name"];
  $photo3 = $_FILES["photo3"]["name"];
  
  $temp_photo1 = $_FILES["photo1"]["tmp_name"];
  $temp_photo2 = $_FILES["photo2"]["tmp_name"];
  $temp_photo3 = $_FILES["photo3"]["tmp_name"];
  //upload im3ge to file
  move_uploaded_file($temp_photo1,"./images/$photo1");
  move_uploaded_file($temp_photo2,"./images/$photo2");
  move_uploaded_file($temp_photo3,"./images/$photo3");

  $Bank_branch = $_POST["Bank_branch"];
  $account_no = $_POST["account_no"];
  $IFSC_code = $_POST["IFSC_code"];
  $money_raise = $_POST["money_raise"];
  $paytm_no = $_POST["paytm_no"];
  $gpay_no = $_POST["gpay_no"];
  //insert querry
  $sql = "INSERT INTO `fundriser` (`name`, `email`, `title`, `description`, `photo1`, `photo2`, `photo3`, `Bank_branch`, `account_no`, `IFSC_code`, `paytm_no`, `gpay_no`, `category`, `money_raise`, `date`) VALUES ('$name', '$email', '$title', '$description', '$photo1', '$photo2', '$photo3', '$Bank_branch', '$account_no', '$IFSC_code', '$paytm_no', '$gpay_no', '$category', '$money_raise', current_timestamp());";
         $result = mysqli_query($conn,$sql);
   if ($result) 
   {
      $showAlert= true;
  }
    
    else {
      $showError= "please enter the form";
    }
  }

?>


<!DOCTYPE html>

<html>
<title>Fundarise for</title>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="fundarisefor.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
  </head>
  <body class="bg-light">
  
   <!-- navbar -->
  <section id="header">
      <nav class="navbar navbar-expand-lg navbar-light" style="background-image: linear-gradient(to top,#33ccff,#e6f9ff)";>
        <a class="navbar-brand" href="assignment.php"><img class="rounded" src="logo1.png" alt="logo" height="50px" width="45px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto pr-4" id="con">
            <li class="nav-item  pr-4">
              <a class="nav-link font-weight-bold" href="browsefundriser.php" id="text1">Browse Fundarise</a>
            </li>
            <li class="nav-item  pr-4">
              <a class="nav-link font-weight-bold" href="fundarisefor.php"  id="text2">Fundarise For</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto" id="con">
            <li class="nav-item dropdown">
              <a class="btn btn-link btn btn-primary btn-lg active font-weight-bold nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-pressed="true" style="color:white;">
                <?php echo $_SESSION['username']; ?>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="logout.php">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </section>
    <?php
        if ($showAlert) 
         {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success!</strong> wait for 3day for check.

              </div>';
          }
        if ($showError) 
        {
               echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
               <strong>Error!</strong> '. $showError.'

          </div>';
           }
       ?>
    <div class="container ">
      <h1 class="text-center">Fill The Form</h1>
      <!--form-->
      <form action="fundarisefor.php" method="POST" enctype="multipart/form-data" class="form-group">
        <!--name-->
        <div class="form-outline mb-4 w-50 m-auto">
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" id="name" class="form-control" placeholder="ENTER YOUR NAME" autocomplete="off" required ="required">
        </div>
          <!--email-->
          <div class="form-outline mb-4 w-50 m-auto">
          <label for="name" class="form-label">Email</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="ENTER YOUR email" autocomplete="off" required ="required">
        </div>
          
          <!--title-->
          <div class="form-outline mb-4 w-50 m-auto">
          <label for="name" class="form-label">title</label>
          <input type="text" name="title" id="title" class="form-control" placeholder="ENTER YOUR title" autocomplete="off" required ="required">
        </div>
          <!--description-->
          <div class="form-outline mb-4 w-50 m-auto">
            
          <label for="description" class="form-label">description</label>
          
          <input type="text" name="description" id="description" class="form-control" placeholder="description" autocomplete="off" required ="required" maxlength="5000">
        </div>
        <!--category-->
        <div class="form-outline mb-4 w-50 m-auto">
        <div class="form-group">
        <label for="category">Category:</label>
            <select class="form-control" id="" name="category">
              <!--category list-->
              <?php
              include 'dbconnect.php';
              $sql = "SELECT * FROM category";
              $result = mysqli_query($conn, $sql);
              while($row=mysqli_fetch_assoc( $result))
              {
                $category_title=$row["category_title"];
                $category_id=$row["category_id"];
               
                echo"<option value='$category_id'>$category_title</option>";
              }
              ?>
              
            </select>
                </div>
          </div>
         
          <!--photo1-->
          <div class="form-outline mb-4 w-50 m-auto">
          <label for="photo1" class="form-label">photo 1</label>
          <input type="file" name="photo1" id="photo1" class="form-control" placeholder="enter your photo 1" autocomplete="off" required ="required">
        </div>
          <!--photo2-->
          <div class="form-outline mb-4 w-50 m-auto">
          <label for="photo2" class="form-label">photo 2</label>
          <input type="file" name="photo2" id="photo2" class="form-control" placeholder="enter your photo 2" autocomplete="off" required ="required">
        </div>
          <!--PHOTO3-->
          <div class="form-outline mb-4 w-50 m-auto">
          <label for="photo3" class="form-label">photo3</label>
          <input  type="file" class="form-control" name="photo3" id="photo3"   required ="required">
        </div>
          <!--BANK BRANCH-->
          <div class="form-outline mb-4 w-50 m-auto">
          <label for="Bank_branch" class="form-label">bank branch</label>
          <input type="text" name="Bank_branch" id="Bank_branch" class="form-control" placeholder="ENTER YOUR bank branch" autocomplete="off" required ="required">
        </div>
          <!--ACCOUNT NO-->
          <div class="form-outline mb-4 w-50 m-auto">
          <label for="account number" class="form-label">account number</label>
          <input type="text" name="account_no" id="account_no" class="form-control" placeholder="ENTER YOUR account number" autocomplete="off" required ="required">
        </div>
          <!--IFSC-->
          <div class="form-outline mb-4 w-50 m-auto">
          <label for="IFSC" class="form-label">IFSC code</label>
          <input type="text" name="IFSC_code" id="IFSC_code" class="form-control" placeholder="ENTER YOUR IFSC code" autocomplete="off" required ="required">
        </div>
          <!--MONEY RAISE-->
          <div class="form-outline mb-4 w-50 m-auto">
          <label for="money raise" class="form-label">money raise</label>
          <input type="text" name="money_raise" id="money_raise" class="form-control" placeholder="ENTER YOUR Money Raise" autocomplete="off" required ="required">
        </div>
          <!--paytm-->
          <div class="form-outline mb-4 w-50 m-auto">
          <label for="Paytm number" class="form-label">Paytm number</label>
          <input type="text" name="paytm_no" id="name" class="form-control" placeholder="ENTER YOUR Paytm number" autocomplete="off" required ="required">
        </div>
          <!--gpay-->
          <div class="form-outline mb-4 w-50 m-auto">
          <label for="Paytm number" class="form-label">Google Pay number</label>
          <input type="text" name="gpay_no" id="gpay_no" class="form-control" placeholder="ENTER YOUR Google Pay number" autocomplete="off" required ="required">
        </div>
          <!--submit-->
              <div class="submit text-center mt-5">
                <button type="submit"><!--<input type="submit" value="Login">//-->
         
                 Submit
                </button>
          </div>
      </form>
    </div>
         
  </body>
</html>