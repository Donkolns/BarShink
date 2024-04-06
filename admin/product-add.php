<?php
include "../connect.php";
$Name = isset($_POST['Name'])?$_POST['Name']:false;
$Categ = isset($_POST['Categ'])?$_POST['Categ']:false;
$Price = isset($_POST['Price'])?$_POST['Price']:false;
$Descr = isset($_POST['Descr'])?$_POST['Descr']:false;
$Image = isset($_POST['Image'])?$_POST['Image']:false;

function check_error($error) {
    return "<script>
    alert('$error'); 
    location.href = 'Panel-admin2.php';
    </script>";
}
if ($Name and $Categ and $Price and $Descr) {
    $query = "INSERT INTO `Product` (`Name`, `Category_id`, `Description`, `Price`, `Image`) VALUES ('$Name', '$Categ', '$Descr', '$Price', '$Image')";
    $result = mysqli_query($con, $query);
    "<script>alert('Запись создана!');location.href = '/Panel-admin2.php';
    </script>";

} else {
    echo check_error("Все поля должны быть заполненны!");
}
?>