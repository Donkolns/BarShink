<?php
include "../connect.php";
$Name = isset($_POST['Name'])?$_POST['Name']:false;

if($Name){
    $result_add = mysqli_query($con, "INSERT into Category (`Name_cat`) values ('$Name')");
    echo"<script>alert('Категория  создана');
    location.href ='Categories.php';
    </script>";
}
?>