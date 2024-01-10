

<?php require_once 'includes/header.php';?>
<?php require_once 'includes/headercompenent.php';?>    


    <div class="Connect-form">
        <div class="form-container">
            <h1 class="title">Sign-Up</h1>
            <form action="signup.php" method="post">
                <div>
                        <label for="name">First name:</label>
                    <input type="text" id="name" name="fname">
                </div>
                <div>    
                    <label for="firstName">Last name:</label> 
                    <input type="text" id="firstName" name="lname">
                </div>
                <div>    
                    <label for="email">Email:</label> 
                    <input type="email" id="email" name="email">
                </div>
                <div>    
                    <label for="password">Password</label> 
                    <input type="password" id="password" name="password">
                </div>
                <input type="submit" value="Sign-Up" name="submit" class="submit">   
        </div>
    
        <h1 class="sucess"><?php require_once 'db/conn.php';
                    $c=new crud($pdo);
                    if (isset($_POST['submit'])) {
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $success=$c->insertclient($fname, $lname, $email, $password);
                    if ($success) {
                        echo 'You have been registred';
                    }
                    else {
                        echo 'You have noot been registred';
                    }}?>
        </h1>
    </div> 



    <?php include_once 'includes/footercompenent.php' ?>                    
    <!--jacaScript link-->
    <?php include_once 'includes/footer.php' ?>