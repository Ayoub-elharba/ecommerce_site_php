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
   <title>Qui sommes-nous?</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/logo.png" alt=""> <br> <br>
         <img src="images/s200.jpg" alt="">
      </div>

      <div class="content">
         <h3>qui somme nous?</h3>
         <p> Une entreprise spécialisée dans la vente d'huiles naturelles de haute qualité.</p>
         <p>C’est en 2021, au cours d’un repas de famille, qu’a germé le projet bio et bien etre. Avec une idée simple : partager notre connaissance et notre passion des huiles essentielles, ces fabuleux concentrés de forces vitales des plantes.

Ce projet a pris ses racines dans les souvenirs intacts de la Nature sauvage et si belle de la Margeride, terre âpre et sauvage de notre enfance. C’est dans ces paysages bruts et magnifiques qu’est né notre amour de la terre et notre sensibilité pour la force des plantes.

Fin 2022, bio et bien etre, site d’information sur l’aromathérapie, voit le jour. Complètement « fait- maison », nous l’avons façonné en famille, mon père, ma sœur Valérie et moi, tous trois ingénieurs de formation.

Très vite, des producteurs prennent contact avec nous depuis Madagascar, le Maroc, l’Espagne, l’Inden… pour nous proposer leurs huiles essentielles.</p>
         <a href="contact.php" class="btn">Contactez-nous</a>
      </div>
      <div class="image">
         <img src="images/ss200.jpg" alt="">

      </div>
   </div>

</section>











<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>