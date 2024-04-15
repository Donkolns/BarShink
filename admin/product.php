<?php
include "../connect.php";

$query = "SELECT * FROM `Product` INNER JOIN Category on Product.Category_id = Category.Category_id  where `Id_product`";
$result = mysqli_query($con, $query);
$result1 = mysqli_fetch_all($result);
$query_cat = mysqli_query($con, "SELECT * FROM `Category`");
$cat_result = mysqli_fetch_all($query_cat);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel = "stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="style.css">

</head>
</head>
<?php
include "header_admin.php";
?>

<body>
        <section class="sort_1">
            <div class="sort">
                <ul class="list-group list-group-horizontal mt-5 mb-3">
                    <h4>Сортировка по дате публикации:</h4>
                    <li class="list-group-item">
                        <a href=""><img width="30" src="asc-sort.png" alt=""></a>
                    </li>
                    <li class="list-group-item">
                        <a href=""><img width="30" src="desc-sort.png" alt=""></a>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <div class="products">
        <table>
            <tr>
                <th>Название</th>
                <th>Категория</th>
                <th>Цена</th>
                <th>Описание</th>
                <th>Изображение</th>
                <th>Измененое Изображение</th>
            </tr>
            
            <?php foreach ($result1 as $item):?>
            <tr>
            <form action="product_update.php?id=<?=$item[0]?>" method="POST" enctype="multipart/form-data">
                <td><input type="text" name='Name' value = "<?=$item[1]?>"></td>
                <td>   <select  class="form_card" name="cat" id="">
                <option value="<?=$item[3]?>" selected><?=$item[7]?></option>  
            <?php foreach ($cat_result as $value_2) {?>  
                        <option value="<?=$value_2[0]?>"><?=$value_2[1]?></option>  
                    <?php }?>  
                </select> </td>
                <td><input type="number" name='Price' value = "<?=$item[4]?>"></td>
                <td><input type="text" name='Desc' value = "<?=$item[2]?>"></td>
                <td> <img src="../images/<?=$item[5]?>" alt="" height = "100px" width = "100px"></td>
                <td><input type="file" name='file'></td>
                <td><input type="submit" class="btn btn-outline-success" value="Редактировать"></td>
                </form>
                <td><a href="product-delete.php?id=<?=$item[0]?>"><button type="button" class="btn btn-outline-danger" >Удалить</button></a></td>
            </tr>
            <?php endforeach;?>
        </table>
    </div>
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
Создать товар
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Добавление товара</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="product-add.php" class="adding" method="POST" enctype="multipart/form-data">
            <input type="text" name="Name" id="" placeholder="Название">
            <select  class="form_card" name="cat" id="">
            <?php foreach ($cat_result as $value_2) {?>  
                        <option value="<?=$value_2[0]?>"><?=$value_2[1]?></option>  
                    <?php }?>  
                </select>  
            <input type="number" name="Price" id="" placeholder="Цена">
            <input type="text" name="Desc" id="" placeholder="Описание">
            <input type="file" name="image" placeholder="Изображение">

      </div>
      <div class="modal-footer">
            <input type="submit" class="btn btn-success" value="Создать">
        </form>
      </div>
    </div>
  </div>
</div>
    <div>

    </div>
</body>
</html>