<?php 
include "connect.php";

$email = trim($_POST['email']);
$password = trim($_POST['password']);

if(mb_strlen($email) < 5 || mb_strlen($email) > 100) {
    echo "Недопустимая длина логина"; 
} 

$result = mysqli_query($con, "SELECT * FROM `Users` WHERE `Email` = '$email'");
$user = mysqli_fetch_assoc($result);

if(!empty($user)) {
    echo "Данный логин уже используется";
} else {
    mysqli_query($con, "INSERT INTO `Users`(`Email`, `Password_hash`, `Bonus_points`, `role`) VALUES ('$email', $password, 1, 'user')");

    $_SESSION["user_id"] = mysqli_insert_id($con);

    header('Location: personal-cab.php');
}
?>