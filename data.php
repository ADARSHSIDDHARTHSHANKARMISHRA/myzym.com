<?php
$name=$_POST['name'];
$age=$_POST['age'];
$number=$_POST['number'];
$email=$_POST['Email'];
$gender=$_POST['gender'];
$conn=new mysqli('localhost','root','','data');
if($conn->conection_error){
    die('ConnectionFailed:'.$conn->connection_error);

}else{
    $stmt=$conn->prepare("insert into registration(name,age,number,Email,gender)
    value(?,?,?,?,?)");
    $stmt->bind_param("siiss",$name,$age,$number,$email,$gender);
    $stmt->execute();
    echo "Registration completed";
    $stmt->close();
}
?>