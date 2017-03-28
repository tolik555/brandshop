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
                <a href="/">
                Главная
            </a>
                <a href="/?page=shop">
                Магазин
            </a>
            </div>
        </div>
    </header>

    <div id="content">

        <?php
    
//    function vardump($var) {
//      echo '<pre>';
//      var_dump($var);
//      echo '</pre>';
//    }
//    
//    $id = 1;
//    $name = 'IPhone';
//    $desc = 'Здесь будет описание IPhone';
//    $img = '/images/goods/iphone.jpg';
//    $price = '2000 $';
//    
//    echo $id . '<br>';
//    echo $name . '<br>';
//    echo $desc . '<br>';
//    echo $img . '<br>';
//    echo $price . '<br>';
//    
//    $product = [1, 'IPhone', 'Здесь будет описание IPhone', '/images/goods/iphone.jpg', '2000 $'];
//    var_dump($product[1]);
   ?><br>
            <?
//    $product_index = [
//        'id'=>1,
//        'name'=>'IPhone',
//        'desc'=>'Здесь будет описание IPhone',
//        'img'=>'/images/goods/iphone.jpg',
//        'price'=>'2000 $'
//    ];
//    var_dump($product_index['name']);
    ?><br>
                <?
    $goods = [
        [
            'id'=> 1,
            'name'=> 'IPhone',
            'desc'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eos atque expedita et. Unde vel reprehenderit consequuntur repellat, culpa nobis, vero illum rem, explicabo autem, harum. Cupiditate atque, libero unde?',
            'img'=> '/images/goods/iphone.jpg',
            'price'=> '2000 $'
        ],
        [
            'id'=> 2,
            'name'=> 'HTC',
            'desc'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eos atque expedita et. Unde vel reprehenderit consequuntur repellat, culpa nobis, vero illum rem, explicabo autem, harum. Cupiditate atque, libero unde?',
            'img'=> '/images/goods/htc.jpg',
            'price'=> '1000 $'
        ],
        [
            'id'=> 3,
            'name'=> 'Samsung',
            'desc'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eos atque expedita et. Unde vel reprehenderit consequuntur repellat, culpa nobis, vero illum rem, explicabo autem, harum. Cupiditate atque, libero unde?',
            'img'=> '/images/goods/samsung.jpg',
            'price'=> '400 $'
        ]
    ];
//    
//    var_dump($goods);
//    
//    foreach($goods as $key=>$good){
//        echo 'Ключ масива:'.$key.'<br>';
//        echo $good['id'].'<br>';
//        echo $good['name'].'<br>';
//        echo $good['desc'].'<br>';
//        echo $good['img'].'<br>';
//        echo $good['price'].'<br>';
//        echo '<hr>';
//    }
    
    $page = $_GET['page'];
    if(!isset($page)){
        require('tamplates/main.php');
    } elseif($page=='shop'){
        require('tamplates/shop.php');
    } elseif($page == 'product') {
        if(!isset($_GET['id'])|| $_GET['id']==""){
             //do some thing
            echo 'нет id';
        } else {
            $id = $_GET['id'];
            $product = $goods[$id];
            require('tamplates/openedProduct.php');
        }
    }
    
    ?>
    
    </div>

    <footer>
        <div id="footerInside">

            <div id="contacts">
                <div class="contactWrap">
                    <img src="images/envelope.svg" class="contactIcon"> info@brandshop.ru
                </div>
                <div class="contactWrap">
                    <img src="images/phone-call.svg" class="contactIcon"> 8 800 555 00 00
                </div>
                <div class="contactWrap">
                    <img src="images/placeholder.svg" class="contactIcon"> Москва, пр-т Ленина, д. 1 офис 304
                </div>
            </div>

            <div id="footerNav">
                <a href="/">Главная</a>
                <a href="/?page=shop">Магазин</a>
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