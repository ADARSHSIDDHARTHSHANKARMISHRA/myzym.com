<?php
$mail=$_POST['email'];
$message=$_POST['message'];

$conn=new mysqli('localhost','root','','mail');
if($conn->conection_error){
    die('ConnectionFailed:'.$conn->connection_error);

}else{
    $stmt=$conn->prepare("insert into message(mail,message)
    value(?,?)");
    $stmt->bind_param("ss",$mail,$message);
    $stmt->execute();
    echo "MAIL SEND";
    $stmt->close();
}
?>