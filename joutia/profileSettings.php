<?php require_once 'includes/header.php';?>
<?php
    session_start();
if(isset($_SESSION['name'])) {
    $r=$_SESSION['name'];}
else    
header(header:'location: index.php ');
    
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
                <li><a href="index2.php#productSection" class="navbar-link">OUR PRODUCTS</a></li>
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
            </div>
        </div>
        </div>
        <div class="cart-button">
        <i class="fa-solid fa-cart-shopping"></i>
        <p class="cart-quantity" id="cart-quantity">0</p>
        </div>
        </div>
        
            </div>
          </nav> 
<header class="header-profileSettings">
    <h1>Profile Settings</h1>
</header>
<div class="mainAndaside-container">
<aside class="aside-profileSettings">
<ul class="aside-profileSettings-menu" >
    <li role="link"><a href="index2.php#homeSection">Home</a></li>
    <li><a href="index2.php#aboutSection">About</a></li>
    <li><a href="">Settings</a></li>
    <li><a href="">Contact us</a></li>
</ul>
</aside>
<main class="main-profileSettings">

    <form action="profileSettings.php" method="post" class="formSettings">
        <div>
            <label for="name">Username:</label>
            <input type="text" id="name" name="username" value="<?php echo $r['username']?>">
        </div>
        <div>    
            <label for="password">Password</label> 
            <input type="password" id="password" name="password" value="<?php echo $r['password']?>">
        </div>
        <input type="submit" value="Edit" name="edit" class="submit"> 
    </form>      
    <p class='Informations-edit-etat'>
        <?php 
            if (isset($_POST['edit'])) {
                require_once 'db/conn.php';
                $c=new crud($pdo);
                $username=$_POST['username'];
                $password=$_POST['password'];
                    if($username!=''|| $password!=''){
                        $result=$c->updateinfo($username,$password,$r['email']);
                        echo 'Your inforations are updated';    
                    }
                    else{
                        echo'Username or Password is nul';
                    }
                } 
        ?>
    </p>
</main>



<?php require_once 'includes/footer.php' ?>
</div>
