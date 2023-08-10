<?php
    $username = $_POST['email'];
    $password = $_POST['password'];

$conn = new mysqli('localhost','root','','login');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);

}else{
    $stmt = $conn->prepare("insert into login(username,password) values(?,?)");
    $stmt->bind_param("ss",$username, $password);
    $stmt->execute();
    echo "logged in succesfully";
    echo '<a href="Peeett.php">Register Now</a>';
    $stmt->close();
    $conn->close();
}
?>