<?php 
Class crud{
private $db;
function __construct($conn) { $this->db = $conn; }
public function insertclient($fname,$lname,$email,$password ) {
    try {
$sql='
INSERT into clients(username,email,password) VALUES(:username,:email,:upassword)';
$stm= $this->db->prepare($sql);
$username=$fname.' '. $lname;
$stm->bindParam(":username",$username);
$stm->bindParam(":email",$email);
$stm->bindParam(":upassword",$password);
$stm->execute();
return true;
} catch (Exception $e) {  
    if($e->getCode()==23000){
        echo 'Existed Email ';
    }
    else{
        echo $e->getMessage();
    }
}
}
public function fetchclient($email,$password) {
    try {
        $sql='SELECT * from clients Where email=:email And password=:password; ';
        $stm= $this->db->prepare($sql);
        $stm->bindParam(":email",$email);
        $stm->bindParam(":password",$password);
        $stm->execute();
        $result=$stm->fetch(PDO::FETCH_ASSOC);
        return $result;
        } catch (Exception $e) {  
            echo "". $e->getMessage() ."";
        }
        }

public function updateinfo($username,$password,$email) {
    try {
$sql='UPDATE clients SET username=:username,password=:upassword Where email=:email';
$stm= $this->db->prepare($sql);
$stm->bindParam(":username",$username);
$stm->bindParam(":email",$email);
$stm->bindParam(":upassword",$password);
$stm->execute();
return true;
} catch (Exception $e) {  
    echo "". $e->getMessage() ."";
}
}
public function fetchjackets(){
    try{
        $sql='select * from produit where type=1';
        $stm= $this->db->query($sql);
        $result=$stm->fetchAll();
        return $result;
    }
    catch(Exception $e){}
}
public function fetchSweaters(){
    try{
        $sql='select * from produit where type=2';
        $stm= $this->db->query($sql);
        $result=$stm->fetchAll();
        return $result;
    }
    catch(Exception $e){}
}
public function fetchPants(){
    try{
        $sql='select * from produit where type=3';
        $stm= $this->db->query($sql);
        $result=$stm->fetchAll();
        return $result;
    }
    catch(Exception $e){}
}
public function fetchTshirts(){
    try{
        $sql='select * from produit where type=4';
        $stm= $this->db->query($sql);
        $result=$stm->fetchAll();
        return $result;
    }
    catch(Exception $e){}
}
public function fetchSneackers(){
    try{
        $sql='select * from produit where type=5';
        $stm= $this->db->query($sql);
        $result=$stm->fetchAll();
        return $result;
    }
    catch(Exception $e){}
}

public function fetchAllProducts(){
    try{
        $sql='select * from produit';
        $stm= $this->db->query($sql);
        $result=$stm->fetchAll();
        return $result;
    }
    catch(Exception $e){}
}
public function fetchSpecifiqueProducts($name){
    try{
        $sql='select * from produit where nom like :nom ';
        $stm= $this->db->prepare($sql);
        $name="%$name%";
        $stm->bindParam(":nom",$name);
        $stm->execute();
        $result=$stm->fetchAll();
        return $result;
    }
    catch(Exception $e){}
}
}
?>