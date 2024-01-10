
<?php require_once 'includes/header.php';?>
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
<?php } else{ require_once 'includes/headercompenent.php';}?>  
<div class="search-container">
<form action="product.php" method="get">
    <input type="text" name="search">
    <input type="submit" name="submit" value="Search">
</form>
</div>

<div class="product-main">
<?php
    require_once 'db/conn.php';
    $c=new crud($pdo);
    if (isset($_GET['submit'])){
        $result=$c->fetchSpecifiqueProducts($_GET['search']);
    }
    else{ $result=$c->fetchAllProducts();}
    $name=array();
    $price=array();
    $path=array();
    for($i=0;$i<sizeof($result);$i++){
        $name[$i]=$result[$i]['nom'];
        $price[$i]=$result[$i]['price'];
        $path[$i]=$result[$i]['path'];
    }
    for($i=0;$i<count($name);$i++){
?>
<div class="p-proudct-Container">
        <img src=<?php echo $path[$i] ?>  class="p-Product-Image">
        <h2 class="p-nameOfProduct"><?php echo $name[$i] ?></h2>       
        <p>
            <span id="devise" class="p-devise">MAD</span>
            <span id="price" class="p-Price"><?php echo $price[$i] ?></span>
        </p>
        <form action="" class="p-rating">
        <input type="radio" name="rate" id="rate-1">
        <label for="rate-1" class="fa fa-star"></label>
        <input type="radio" name="rate" id="rate-2">
        <label for="rate-2" class="fa fa-star"></label>
        <input type="radio" name="rate" id="rate-3">
        <label for="rate-3" class="fa fa-star"></label>
        <input type="radio" name="rate" id="rate-4">
        <label for="rate-4" class="fa fa-star"></label>
        <input type="radio" name="rate" id="rate-5">
        <label for="rate-5" class="fa fa-star"></label>
        </form>
        <button class="p-addToCard">Add to cart</button>
</div>
<?php } ?>
</div>


<?php include_once 'includes/footer.php' ?>
