

<div class="under-popup" >
  <!--the main1-->
    <div class="main1" id="homeSection">
      <h1 class="main1text">
        so. dress <br> like you're <br>going to the <br> bank to <br> borrow <br> money
      </h1>
      <button>
        <a href="product.php" class="Shop-the-Fall">Shop the Fall Collection -></a>
      </button>
    </div>
  <!--about-->
    <div class="about" id="aboutSection">
      <h1 class="first-text">
          wear clothes that <br>matter
      </h1>
      <div class="about-grid">
      <img src="assets/img2.jpg" alt="" >
      <div>
      <p class="text-About">
        Introducing our online boutique, where you'll find a carefully curated selection of vintage clothing for men and women. Our collection spans decades, from the 1920s to the 1990s, and includes everything from timeless classics to bold statement pieces <br>
        We take pride in sourcing each item with care, ensuring its authenticity and quality before it makes its way onto our site. Our vintage clothing is not only stylish but also sustainable, as we believe in preserving these unique pieces for future generations to enjoy. <br>
      </p>
      <p class="text-About">
        Whether you're looking for a vintage dress for a special occasion, a retro t-shirt to add to your collection, or a one-of-a-kind jacket to make a statement, our online store has something for everyone. So why not join us in our love for vintage fashion and shop with us today? <br>
        At our online boutique, we believe that vintage fashion is more than just a trend - it's a lifestyle. Our carefully selected pieces are not only stylish but also reflective of the unique history and culture of each era. From the flapper dresses of the 1920s to the grunge-inspired looks of the 1990s, our collection tells a story. <br>
      </p>
      <p class="text-About">
        We understand that finding the perfect vintage piece can be a daunting task, which is why we offer a personalized shopping experience. Our knowledgeable team is available to assist you in finding the perfect item to fit your style and size. Whether you're looking for a specific brand or a particular style, we're here to help. <br>
        Our commitment to sustainability is at the heart of our business. We believe that vintage clothing is not only stylish but also eco-friendly, as it reduces waste and conserves resources. By preserving these unique pieces, we're also preserving a piece of history and culture. <br>
        We take pride in our customer service, and we're committed to ensuring that your shopping experience with us is a positive one. From our secure payment options to our fast and reliable shipping, we're dedicated to making your experience with us as seamless and enjoyable as possible. <br>
      </p></div>
      </div>
    </div>

  <!--product container-->
  <div class="product-container" id="productSection">
      <p>Products</p>
      <h1 >Chose your clothes for your way of life</h1> 
      <p class="product-container-title" id="jackets">jackets</p>
      <div class="container-grid">
        <?php

            require_once 'db/conn.php';
            $c=new crud($pdo);
            $result=$c->fetchjackets();
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
          <div class="card-product">
          <img src=" <?php echo  $path[$i]?>" alt="" class="card-img">
          <h2 class="nameOfProduct"><?php echo $name[$i] ?></h2>       
          <p>
            <span id="devise" class="devise">MAD</span>
            <span id="price" class="Price"><?php echo $price[$i]?></span>
          </p>
          <form action="" class="rating">
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
          <button class="addToCard">Add to cart</button>
        </div>

              <?php
            }
        ?>
      </div>
      <p class="product-container-title" >Sweaters</p>
      <div class="container-grid">
      <?php

        require_once 'db/conn.php';
        $c=new crud($pdo);
        $result=$c->fetchSweaters();
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
        <div class="card-product">
        <img src=" <?php echo  $path[$i]?>" alt="" class="card-img">
        <h2 class="nameOfProduct"><?php echo $name[$i] ?></h2>       
        <p>
        <span id="devise" class="devise">MAD</span>
        <span id="price" class="Price"><?php echo $price[$i] ?></span>
        </p>
        <form action="" class="rating">
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
        <button class="addToCard">Add to cart</button>
        </div>

          <?php
        }
        ?>
      </div>   
      <p class="product-container-title">Pants</p>    
      <div class="container-grid">
          <?php
              require_once 'db/conn.php';
              $c=new crud($pdo);
              $result=$c->fetchPants();
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
              <div class="card-product">
              <img src=" <?php echo  $path[$i]?>" alt="" class="card-img">
              <h2 class="nameOfProduct"><?php echo $name[$i] ?></h2>       
              <p>
              <span id="devise" class="devise">MAD</span>
              <span id="price" class="Price"><?php echo $price[$i] ?></span>
              </p>
              <form action="" class="rating">
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
              <button class="addToCard">Add to cart</button>
              </div>

                <?php
              }
              ?>
      </div>
      <p class="product-container-title">T-shirts</p>    
      <div class="container-grid">
      <?php
              require_once 'db/conn.php';
              $c=new crud($pdo);
              $result=$c->fetchTshirts();
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
              <div class="card-product">
              <img src=" <?php echo  $path[$i]?>" alt="" class="card-img">
              <h2 class="nameOfProduct"><?php echo $name[$i] ?></h2>       
              <p>
              <span id="devise" class="devise">MAD</span>
              <span id="price" class="Price"><?php echo $price[$i] ?></span>
              </p>
              <form action="" class="rating">
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
              <button class="addToCard">Add to cart</button>
              </div>

                <?php
              }
              ?>
      </div>      
      <p class="product-container-title">Sneackers</p>    
      <div class="container-grid">
      <?php
              require_once 'db/conn.php';
              $c=new crud($pdo);
              $result=$c->fetchSneackers();
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
              <div class="card-product">
              <img src=" <?php echo  $path[$i]?>" alt="" class="card-img">
              <h2 class="nameOfProduct"><?php echo $name[$i] ?></h2>       
              <p>
              <span id="devise" class="devise">MAD</span>
              <span id="price" class="Price"><?php echo $price[$i] ?></span>
              </p>
              <form action="" class="rating">
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
              <button class="addToCard">Add to cart</button>
              </div>
                <?php
              }
              ?>
      </div>            
    </div>
  </div>      
  <div class="main2">
  <video src="assets/video1.mp4" type="video/mp4" autoplay muted loop class="main2-video" ></video>
  
  <div class="main2-button-container">
    <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
      Show all products
    </a>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="offcanvas-menu">
          <li><a href="" id="translate">Home</a></li>
          <li><a href="product.php" id="translate">Product</a></li>
          <li><a href="signIn.php" id="translate">sign-In</a></li>
          <li><a href="signup.php" id="translate">sign-Up</a></li>
          <li><a href="" id="translate">Sneackers</a></li>
        </ul>
      </div>
    </div>
  </div>
  </div>
  <?php require_once 'includes/footercompenent.php'?>