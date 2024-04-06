<?php
include "../connect.php";

$query = "SELECT * FROM `Product` WHERE `Id_product`";
$result = mysqli_query($con, $query);
$result1 = mysqli_fetch_all($result);
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
    <link rel="stylesheet" href="style.css">
</head>
</head>
<body>
<header>
    <nav class="nav">
        <div class="index">
            <h1 class="index_">Админ</h1>
            <form id="search" action="/">
                <input type="search" name="search" id="searchText" placeholder="Поиск">
            </form>
        </div>
        <div class = "cart_account">
            <a href="Panel-admin2.php">Управление товарами</a>
            <a href="Panel-admin3.php">Управление категориями напитков</a>
            <a href="Panel-admin4.php">Управление заказами</a>
            <a href="Panel-admin5.php">Статистика и отчеты</a>
            <img src="images/2703085_bag_cart_ecommerce_shop_icon.png" height="30px" width="30px" alt="">
            <img src="images/9104273_person_user_people_profile_account_icon.png"height="30px" width="30px" alt="">
        </div>
    </nav>
</header>
    <div class="search">
        <div class="header-div2">
           
        </div>
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
                <th>Миниатюра</th>
            </tr>
            <?php foreach ($result1 as $item):?>
            <tr>
                <td><?=$item[1]?></td>
                <td><?=$item[3]?></td>
                <td><?=$item[4]?></td>
                <td><?=$item[5]?></td>
                <td><button type="button" class="btn btn-outline-success">Редактировать</button></td>
                <td><button type="button" class="btn btn-outline-danger">Удалить</button></td>
            </tr>
            <tr>
                <td><?=$item[1]?></td>
                <td><?=$item[3]?></td>
                <td><?=$item[4]?></td>
                <td><?=$item[5]?></td>
                <td><button type="button" class="btn btn-outline-success">Редактировать</button></td>
                <td><button type="button" class="btn btn-outline-danger">Удалить</button></td>
            </tr>
            <tr>
                <td><?=$item[1]?></td>
                <td><?=$item[3]?></td>
                <td><?=$item[4]?></td>
                <td><?=$item[5]?></td>
                <td><button type="button" class="btn btn-outline-success">Редактировать</button></td>
                <td><button type="button" class="btn btn-outline-danger">Удалить</button></td>
            </tr>
            <?php endforeach;?>
        </table>
    </div>
    <div>
        <form action="product-add.php" class="adding" method="POST" >
            <p>Добавление товара</p>
            <input type="text" name="Name" id="" placeholder="Название">
            <input type="text" name="Categ" id="" placeholder="Категория">
            <input type="text" name="Price" id="" placeholder="Цена">
            <input type="text" name="Descr" id="" placeholder="Описание">
            <input type="text" name="Image" id="" placeholder="Изображение">
            <input type="submit" class="btn btn-success" value="Создать">
        </form>
    </div>
</body>
</html>