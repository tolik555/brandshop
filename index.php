<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/site.css" rel="stylesheet">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/site.js"></script>
    <title>Онлайн магазин</title>
</head>
<body>
<header>
    <div id="headerInside">
        <div id="logo"></div>
        <div id="companyName">Brand</div>
        <div id="navWrap">
            <a href="#">
                Главная
            </a>
            <a href="#">
                Магазин
            </a>
        </div>
    </div>
</header>

<div id="content">

    <?php
    $id = 1;
    $name = 'IPhone';
    $desc = 'Здесь будет описание IPhone';
    $img = '/images/goods/iphone.jpg';
    $price = '2000 $';
    
    echo $id . '<br>';
    echo $name . '<br>';
    echo $desc . '<br>';
    echo $img . '<br>';
    echo $price . '<br>';
    
    $product = [1, 'IPhone', 'Здесь будет описание IPhone', '/images/goods/iphone.jpg', '2000 $'];
    var_dump($product[1]);
    ?><br><?
    $product_index = [
        'id'=>1,
        'name'=>'IPhone',
        'desc'=>'Здесь будет описание IPhone',
        'img'=>'/images/goods/iphone.jpg',
        'price'=>'2000 $'
    ];
    var_dump($product_index['name']);
    
    ?>

    <!--<div id="promo">
        <h1 id="promoText">
            Здесь будет рекламный заголовок
        </h1>
    </div>

    <div id="mainTextWrap">
        <div id="mainText">
            Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.
            Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.
            Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.
            Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.
            Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.
            Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.
            Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.
            Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.
            Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.
        </div>
    </div>

    <div style="width: 1100px; margin: 0 auto">
        <hr>
        <h2>
            Это будет отдельная страница с открытым магзином
        </h2>

        <div style="width: 1100px; margin: 0 auto">
            <h1>
                Каталог товаров
            </h1>
            <div>
                <div class="shopUnit">
                    <img src="http://placehold.it/308x231" />

                    <div class="shopUnitName">
                        Название продукта
                    </div>
                    <div class="shopUnitShortDesc">
                        Здесь будет немного текста описывающего продукт.
                        Здесь будет немного текста описывающего продукт.
                        Здесь будет немного текста описывающего продукт.
                    </div>
                    <div class="shopUnitPrice">
                        Цена: 0000 $
                    </div>
                    <a href="#" class="shopUnitMore">
                        Подробнее
                    </a>
                </div>

                <div class="shopUnit">
                    <img src="http://placehold.it/308x231" />

                    <div class="shopUnitName">
                        Название продукта
                    </div>
                    <div class="shopUnitShortDesc">
                        Здесь будет немного текста описывающего продукт.
                        Здесь будет немного текста описывающего продукт.
                        Здесь будет немного текста описывающего продукт.
                    </div>
                    <div class="shopUnitPrice">
                        Цена: 0000 $
                    </div>
                    <a href="#" class="shopUnitMore">
                        Подробнее
                    </a>
                </div>

                <div class="shopUnit">
                    <img src="http://placehold.it/308x231" />

                    <div class="shopUnitName">
                        Название продукта
                    </div>
                    <div class="shopUnitShortDesc">
                        Здесь будет немного текста описывающего продукт.
                        Здесь будет немного текста описывающего продукт.
                        Здесь будет немного текста описывающего продукт.
                    </div>
                    <div class="shopUnitPrice">
                        Цена: 0000 $
                    </div>
                    <a href="#" class="shopUnitMore">
                        Подробнее
                    </a>
                </div>
            </div>
        </div>

        <div style="margin-bottom: 20px; float: left;">
            <hr>
            <h2>
                Это будет отдельная страница с открытым товаром
            </h2>

            <div id="openedProduct-img">
                <img src="http://placehold.it/342x260">
            </div>
            <div id="openedProduct-content">
                <h1 id="openedProduct-name">
                    Название продукта
                </h1>
                <div id="openedProduct-desc">
                    Здесь будет описание продукта. Здесь будет описание продукта. Здесь будет описание продукта.
                    Здесь будет описание продукта. Здесь будет описание продукта. Здесь будет описание продукта.
                    Здесь будет описание продукта. Здесь будет описание продукта. Здесь будет описание продукта.
                </div>
                <div id="openedProduct-price">
                    Цена: 0000 $
                </div>
            </div>
        </div>


    </div>-->
</div>

<footer>
    <div id="footerInside">

        <div id="contacts">
            <div class="contactWrap">
                <img src="images/envelope.svg" class="contactIcon">
                info@brandshop.ru
            </div>
            <div class="contactWrap">
                <img src="images/phone-call.svg" class="contactIcon">
                8 800 555 00 00
            </div>
            <div class="contactWrap">
                <img src="images/placeholder.svg" class="contactIcon">
                Москва, пр-т Ленина, д. 1 офис 304
            </div>
        </div>

        <div id="footerNav">
            <a href="#">Главная</a>
            <a href="#">Магазин</a>
        </div>

        <div id="social">
            <img class="socialItem" src="images/vk-social-logotype.svg">
            <img class="socialItem" src="images/google-plus-social-logotype.svg">
            <img class="socialItem" src="images/facebook-logo.svg">
        </div>

        <div id="copyrights">&copy; Brand</div>
    </div>
</footer>

</body>
</html>
