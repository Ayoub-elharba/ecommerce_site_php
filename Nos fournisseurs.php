<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel = "icon" href = "images/ew.jpg">

   <title>Nos fournisseures</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
         <!--boostrap css-->
         <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/bootstrap-icons.css">

</head>
<body>
      
<?php include 'components/user_header.php'; ?>
<section class="reviews">
   
   <h1 class="heading">Nos fournisseurs</h1>
   <div class="container shadow mt-5">
    <div class="row row-cols-1 row-cols-md-3 mb-4 mt-4" >
      <div class="col">
        <div class="card px-md-3 py-3" >
          <p class="h4 text-uppercase fw-bold text-center"> BOUDALI SAAD</p> 
          <img src="images/pic-3.png" class="card-img-top"/>
          <div class="card-body" >        
            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Id fugiat porro labore nulla, architecto provident nisi repudiandae ut est. Pariatur maxime!</a>          
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card px-md-3 py-4" >
          <p class="h4 text-uppercase fw-bold text-center"> MIMOUNI MERYEM</p> 
          <img src="images/pic-2.png" class="card-img-top" />
          <div class="card-body" >        
            <p class="card-text">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, repellendus omnis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit Voluptates facere nisi reprehenderit atque harum ullam deserunt !</a>            </p>
          </div>

        </div>
      </div>
      <div class="col">
        <div class="card px-md-3 py-3">
          <p class="h4 text-uppercase fw-bold text-center"> AASALI YASSINE</p> 
          <img src="images/pic-1.png" class="card-img-top"/>
          <div class="card-body" >        
            <p class="card-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus non accusantium maxime placeat exercitationem cum tenetur quibusdam alias sunt dolorum deserunt a enim molestiae!  </a>            </p>
          </div>
        </div>
      </div>


      <div class="col">
        <div class="card px-md-3 py-3" >
          <p class="h4 text-uppercase fw-bold text-center"> BARBACH YOUNES</p> 
          <img src="images/pic-1.png" class="card-img-top"/>
          <div class="card-body" >        
            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Id fugiat porro labore nulla,axime nesciunt facilis sapiente!</a>          
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card px-md-3 py-4" >
          <p class="h4 text-uppercase fw-bold text-center"> BELHAR HAJAR</p> 
          <img src="images/pic-4.png" class="card-img-top" />
          <div class="card-body" >        
            <p class="card-text">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit,Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit.</a>            </p>
          </div>

        </div>
      </div>
      <div class="col">
        <div class="card px-md-3 py-3">
          <p class="h4 text-uppercase fw-bold text-center"> MANKOUSA OUSSAMA</p> 
          <img src="images/pic-66.jpg" class="card-img-top"/>
          <div class="card-body" >        
            <p class="card-text">
                lore
            Lorem ipsum dolor sit amet consectetur adipisicing elit.!</a>            </p>
          </div>
  </div>
  </div>


</section>

<?php include 'components/footer.php'; ?>


</body>
</html>