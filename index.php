<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Главная</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>
<body>
<main>
<div class="description">
    <div class="text-discription">
        <h3>Закажите напитки к себе домой</h3>
        <p >Наша компания предлагает широкий ассортимент напитков для тех, кто всегда в движении и ценит качество и удобство.</p>
        <p> У нас вы найдете прохладные газированные напитки, натуральные соки, чай и кофе, а также молочные продукты и спортивные напитки.</p>
        <button  class="but_buy" href="#">Заказать</button>
    </div>
    <div class="bloc-img-description">
        <img src="images\Group 8192.png" alt="" class="logo" height="500px" wight="500px">
        <img src="images\Group 8195.png" alt="" class="img-description">
    </div>
</div>
    <div class="reviews">
    <h2 class="text-reviews">Отзывы</h2>
    <div class="cards">
        <div class ="card">
            <img class="img_foto" src="images\free-icon-boy-4537069.png" height="100px" wight="100px" alt="">
            <p>Отличный кофе! Очень ароматный и насыщенный вкус. Упаковка красивая и удобная. Я очень доволен покупкой и 
            с удовольствием буду заказывать этот кофе снова. Рекомендую всем любителям кофе!</p>
        </div>
        <div class ="card">
            <img class="img_foto" src="images\free-icon-boy-4537069.png" height="200px" wight="200px" alt="">
            <p>Отличный кофе! Очень ароматный и насыщенный вкус. Упаковка красивая и удобная. Я очень доволен покупкой и 
            с удовольствием буду заказывать этот кофе снова. Рекомендую всем любителям кофе!</p>
        </div>
        <div class ="card">
            <img class="img_foto" src="images\free-icon-boy-4537069.png" height="200px" wight="200px" alt="">
            <p>Отличный кофе! Очень ароматный и насыщенный вкус. Упаковка красивая и удобная. Я очень доволен покупкой и 
            с удовольствием буду заказывать этот кофе снова. Рекомендую всем любителям кофе!</p>
        </div>
    </div>
    </div>
</div>

</main>
    <!-- подвал -->
<footer id="footer">
    <div class="container">
        <div class="connection">
            <div class="connect">
            <p>Связь с нами</p> 
            <div class="images-connection">
                <img src="images/odnoklassniki_3669991.png" alt=""class="icon-whatsapp">
                <img src="images/vk_3670055.png" class="icon-whatsapp" alt="" srcset="">
                <img src="images/whatsapp_3670051.png" class="icon-whatsapp">
            </div>
            </div>
            <div class="clock-work">
                    <p>Часы  работы:</p>
                    <p>09:00 - 23:00</p>
                </div>
            </div>
        <hr> 
        <p class="copirater">© 2023  Все права защищены.</p> 
    </div>
</footer>
</body>
</html>

<script>
    const slider = document.querySelector('.slider');
    const slides = document.querySelectorAll('.slide');
    let currentSlide = 0;

    function nextSlide() {
        slides[currentSlide].style.display = 'none';
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].style.display = 'flex';
    }

    setInterval(nextSlide, 9000);
</script>