<?php  

      function view_details(){
           //fetching details from data base
           include 'dbconnect.php';
                  
                    
           if (isset($_GET['id'])) {
            
             if (isset($_GET['category_id'])) {
                 $category_id =$_GET['category_id'];
                 $id=$_GET['id'];
                 $sql = "SELECT * FROM admin_post WHERE id=$id";
                 $result = mysqli_query($conn, $sql);
                 while ($row=mysqli_fetch_assoc($result)) 
                 {
                     $title = $row['title'];
                     $photo1 = $row['photo1'];
                     $photo2 = $row['photo2'];
                     $photo3 = $row['photo3'];
                     $money_raise = $row['money_raise'];
                     $category_id=$row['category_id'];
                     $description =$row['description'];
                     $name = $row['name'];
                     $id=$row['id'];
                   echo 
                   "
                   <div class='card w-75 mb-3'>
                   <div id='carouselExampleIndicators' class='carousel slide mt-3' data-ride='carousel' data-interval='2500' data-pause='hover' >
     
                   <ol class='carousel-indicators'>
                   <li data-target='#carouselExampleIndicators' data-slide-to='0' class='active'></li>
                   <li data-target='#carouselExampleIndicators' data-slide-to='1'></li>
                   <li data-target='#carouselExampleIndicators' data-slide-to='2'></li>
                   <li data-target='#carouselExampleIndicators' data-slide-to='3'></li>
                 </ol>
                   <div class='carousel-inner'>
                     <div class='carousel-item active'>
                       <img class='d-block w-100' src='./images/$photo1' alt='First slide' id='detailsimage'>
                     </div>
                     <div class='carousel-item'>
                       <img class='d-block w-100' src='./images/$photo1' alt='Second slide' id='detailsimage'>
                     </div>
                     <div class='carousel-item'>
                       <img class='d-block w-100' src='./images/$photo2' alt='Third slide' id='detailsimage'>
                     </div>
                     <div class='carousel-item'>
                       <img class='d-block w-100' src='./images/$photo3' alt='Third slide' id='detailsimage'>
                     </div>
                   </div>
                   <a class='carousel-control-prev' href='#carouselExampleIndicators' role='button' data-slide='prev'>
                     <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                     <span class='sr-only'>Previous</span>
                   </a>
                   <a class='carousel-control-next' href='#carouselExampleIndicators' role='button' data-slide''next'>
                     <span class='carousel-control-next-icon' aria-hidden='true'></span>
                     <span class='sr-only'>Next</span>
                   </a>
                   </div>
                    <div class='card-body'>
                    <h5 class='card-title'>$title</h5>
                    
                    <p class='card-text' id='detaildeascription'>$description</p>
                    <a href='#'><button type='button'  class='btn btn-primary btn-lg '>Donate</button></a>
                  </div>
                   </div>
                   </div>
                   
                   ";
                 }
             }
          }
           
           

      }
               
                    
                  
                  
                  
                  
             
        
        
                   ?>