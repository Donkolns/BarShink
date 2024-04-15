<?php
include "../connect.php";
$id = $_GET['id'];

 $result = mysqli_query($con,"DELETE FROM `Product` WHERE `Id_product` = $id");
 echo "<script>alert('Продукт удален');location.href = 'product.php';
    </script>";
?>