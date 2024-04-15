<?php
include "../connect.php";
$Name = isset($_POST['Name'])?$_POST['Name']:false;

$Categ = isset($_POST['cat'])?$_POST['cat']:false;

$Price = isset($_POST['Price'])?$_POST['Price']:false;

$Descr = isset($_POST['Desc'])?$_POST['Desc']:false;

$file = isset($_FILES['image'])?$_FILES['image']:false; 

$take = $_FILES['image']['tmp_name'];

var_dump($take);

$name = $_FILES['image']['name'];

if($Name and $Price and $Categ and $file  and $Descr){
$result_add = mysqli_query($con, "INSERT INTO  `Product` ( `Name`,`Description`,`Category_id`,`Price`,`Image`)VALUES('$Name','$Descr',$Categ,$Price,'$name')");
if($result_add){
    move_uploaded_file($take, '../images/'.$name);
    echo"<script>alert('Товар создан');
location.href ='product.php';
</script>";
}

}else{
    echo"<script>alert('не все данные заполненные');
    location.href ='product.php';
    </script>";  
}

?>