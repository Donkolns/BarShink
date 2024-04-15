<?php
include "../connect.php";
$query_cat = mysqli_query($con, "SELECT * FROM `Category` ");

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
<body>
<?php
include "header_admin.php";
?>
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
                <th>Название категории</th>
                <th>Количество товаров</th>
            </tr>
            <?php foreach ($cat_result as $item):?>
                <?php  
                $count_product = mysqli_fetch_array(mysqli_query($con , " SELECT COUNT(`Category_id`) FROM `Product` WHERE `Category_id` = $item[0]"));
                ?>
            <tr>
            <form action="cat_update.php?id=<?=$item[0]?>" method="POST" >
                <td><input type="text" name='Name' value = "<?=$item[1]?>"></td>
                <td><?=$count_product[0]?></td>
                <td><input type="submit" class="btn btn-outline-success" value="Редактировать"></td>
                </form>
                <td><a href="cat_delete.php?id=<?=$item[0]?>"><button type="button" class="btn btn-outline-danger" >Удалить</button></a></td>
            </tr>
            <?php endforeach;?>
        </table>
    </div>
    <div class="adding">
        <p>Добавление товара</p>
        <form action="cat_add.php" method="POST" >
            <input type="text" name="Name" id="" placeholder="Название категории">
            <input type="submit" value="Отправить" placeholder="Создать">
        </form>
    </div>
</body>
</html>