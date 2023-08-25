<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

<header class="header">

   <section class="flex">

      <a href="Bioetbienetre.php"><img src="images/logo.png" alt="" class="logo"></a>

      <nav class="navbar">
      <a href="Bioetbienetre.php">Bioetbienetre</a>
         <a href="Nos huiles.php">Nos huiles</a>
         <a href="Nos huiles.php">Nos coffrets</a>
         <a href="Nos fournisseurs.php">Nos fournisseurs</a>
         <a href="Qui sommes-nous.php">Qui sommes-nous?</a>
         <a href="Blog.php">Blog</a>
      </nav>

      <div class="icons">
         <?php
            $count_wishlist_items = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
            $count_wishlist_items->execute([$user_id]);
            $total_wishlist_counts = $count_wishlist_items->rowCount();

            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_counts = $count_cart_items->rowCount();
         ?>
         <div id="menu-btn" class="fas fa-bars"></div>
         <a href="search_page.php"><i class="fas fa-search"></i></a>
         <a href="wishlist.php"><i class="fas fa-heart"></i><span>(<?= $total_wishlist_counts; ?>)</span></a>
         <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?= $total_cart_counts; ?>)</span></a>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">
         <?php          
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile["name"]; ?></p>
         <a href="update_user.php" class="btn">mettre à jour le profil</a>
         <div class="flex-btn">
            <a href="user_register.php" class="option-btn">S'inscrire</a>
            <a href="user_login.php" class="option-btn">connex</a>
         </div>
         <a href="components/user_logout.php" class="delete-btn" onclick="return confirm('logout from the website?');">logout</a> 
         <?php
            }else{
         ?>
         <p>Connectez ou enregistrez d'abord!</p>
         <div class="flex-btn">
            <a href="user_register.php" class="option-btn">S'inscrire</a>
            <a href="user_login.php" class="option-btn">connex</a>
         </div>
         <?php
            }
         ?>      
         
         
      </div>

   </section>

</header>