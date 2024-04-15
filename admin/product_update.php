<?php
include "../connect.php";
$id = isset($_GET['id'])?$_GET['id']:false;

$Name = isset($_POST['Name'])?$_POST['Name']:false;

$Categ = isset($_POST['cat'])?$_POST['cat']:false;

$Price = isset($_POST['Price'])?$_POST['Price']:false;

$Descr = isset($_POST['Desc'])?$_POST['Desc']:false;

$files= $_FILES['file']['error'] == 0 ? $_FILES['file'] : false;

$take = $_FILES['file']['tmp_name'];

$name = $_FILES['file']['name'];
 

$product = mysqli_fetch_assoc(mysqli_query($con, "SELECT * from  `Product` 
INNER JOIN Category on Product.Category_id = Category.Category_id 
 where `Id_product` = $id "));
$check_update = false;
$query_update = " UPDATE `Product` SET ";
if ($product["Name"] != $Name) {
    $query_update .= " `Name` = '$Name', ";
    $check_update = true;
}
if ($product["Price"] != $Price) {
    $query_update .= " Price = '$Price', ";
    $check_update = true;
}
if ($product["Category_id"] != $Categ) {
    $query_update .= " Category_id = $Categ , ";
    $check_update = true;
}
if ($product["Description"] != $Descr) {
  $query_update .= " Description = '$Descr', ";
  $check_update = true;
}
if ($files) {
    $query_update .= " image = '$name', ";
    move_uploaded_file($take, '../images/'.$name);
    $check_update = true;
}
  if ($check_update) {
    $query_update = substr($query_update, 0, -2);
    $query_update .= " WHERE Id_product = $id";
    var_dump($query_update);
    $result = mysqli_query($con, $query_update);
    if ($result) {
        echo"<script>alert('Товар Обновлен');
        location.href ='product.php';
        </script>";
    }
} else {
    echo"<script>alert('Товар актуален');
    location.href ='product.php';
    </script>";
}