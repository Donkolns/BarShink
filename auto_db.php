<?php
$email = trim($_POST['email']);
$password = trim( $_POST['password']);

include "connect.php";

$result = mysqli_query($con, "SELECT * FROM Users WHERE `Email` = '$email' and `Password_hash` = '$password'");

$user = mysqli_fetch_array($result);

$user_id = $user["User_id"];
if (!empty($user_id)) {
    if ($querryUser['role'] == 'user') {
        setcookie('User_id', $user_id, time() + 3600, "/");
        header('Location: personal-cab.php');
    } else {
        header('Location: admin/Panel-admin1.php');
    }
}
else {
    echo "<script>alert(\"Данный пользователь не найден!\");
    location.href = 'auto.php';
    </script>";
}
?>