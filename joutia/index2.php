<?php require_once 'includes/header.php';?>
<?php
  session_start();
  if (isset($_SESSION['name'])) {
    $r=$_SESSION['name'];
    
    ?>
  <!--the first header in black-->
    <header >
      <p>Welcome to our shop , enjoy shopping</p>
    </header>
  <!--the navbar-->  
      <nav class="nav-one">
      <div class="nav-one-wrap">
        <img src="assets/1.png" class="nav-logo">
        <div class="nav-one-menu-wrap">
          <ul class="nav-one-menu">
            <li><a href="index2.php#homeSection" class="navbar-link">HOME</a></li>
            <li><a href="product.php" class="navbar-link">OUR PRODUCTS</a></li>
            <li><a href="index2.php#aboutSection" class="navbar-link">ABOUT</a></li>
            <li><a href="index2.php#homeSection" class="navbar-link">CONTACT</a></li>
          </ul>
          <div class="dropdown">
            <button class="dropbtn"><?php echo $r['username']?></button>
            <div class="dropdown-content">
              <a href="profileSettings.php">Profile settings</a>
              <form action="index2.php" method="post">
              <input type="submit" value="Deconnexion"
              name="deconnexion" style="color: black;padding: 12px 16px;text-decoration: none;display: block;border:none;background-color:white;">
              </form>
              <?php
              if(isset($_POST['deconnexion'])){
                header(header:'location: index.php ');
                session_destroy();
              }
              ?>
            </div>
          </div>
          </div>
          <div class="cart-button">
          <a href="panier.php"><i class="fa-solid fa-cart-shopping"></i></a>
          <p class="cart-quantity" id="cart-quantity">0</p>
        </div>
        </div>
        
            </div>
          </nav> 
        <!--under pop up-->
        <?php require_once 'includes/Maincomponent.php'  ?>
        <?php require_once 'includes/footercompenent.php'  ?>
        <!--jacaScript link-->

<?php } 
else{
  header(header:'location: index.php ');
}?>
  <script src="js/Popup.js"></script>
<?php require_once 'includes/footer.php'  ?>
