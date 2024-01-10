

<?php require_once 'includes/header.php';?>
<?php require_once 'includes/headercompenent.php';

session_start();
?>    

    <div class="Connect-form">
        <div class="form-container">
            <h1 class="title">Sign-in</h1>
            <form  method="post">
                <div>    
                    <label for="email">Email:</label> 
                    <input type="email" id="email" name="email">
                </div>
                <div>    
                    <label for="password">Password</label> 
                    <input type="password" id="password" name="password">
                </div>
                <input type="submit" value="Sign-In" name="connect" class="submit">   
        </div>

    <p class="connect-etat">  <?php
    require_once 'db/conn.php';
    $c=new crud($pdo);
    if(isset($_POST['connect'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result=$c->fetchclient($email,$password);    
    if($result){
        
        $_SESSION['name'] = $result;
        header(header:'location: index2.php ');
    } else {
        echo "Email address or Password is incorrect";
    }
} else {
    echo "";
}
?></p>

    </div> 





    <!--jacaScript link-->
<?php include_once 'includes/footer.php' ?>