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
      <a href="../admin/dashboard.php" class="logo">Admin<span>Panel</span></a>

      <nav class="navbar">
         <a href="../admin/dashboard.php">tableau de bord</a>
         <a href="../admin/products.php">produits</a>
         <a href="../admin/placed_orders.php">commandes passées</a>
         <a href="../admin/users_accounts.php">utilisateurs</a>
         <a href="../admin/messages.php">messages</a>

      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">
         <a href="../components/admin_logout.php" class="delete-btn" onclick="return confirm('se déconnecter du site?');">Se déconnecter</a> 
      </div>

   </section>

</header>