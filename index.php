<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/site2.css" rel="stylesheet">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/site.js"></script>
    <title>Интернет-магазин мебели</title>
</head>
<body>
<header>
    <div id="headerInside">
        <div id="logo"></div>
        <div id="companyName">Polno Mebeli</div>
        <div id="navWrap">
            <a href="/">
                Главная
            </a>
            <a href="index.php?page=shopCategories">
                Магазин
            </a>
        </div>
    </div>
</header>

<div id="content">

    <?php
        $categories = [
            [
                'id' => 'shoeCabinet',
                'name' => 'Обувницы',
                'desc' => 'Рады помочь сделать Ваш дом уютнее с пользой для кошелька.',
                'img' => 'images2/ob2.png',
            ],
            [
                'id' => 'dresser',
                'name' => 'Комоды',
                'desc' => 'Рады помочь сделать Ваш дом уютнее с пользой для кошелька.',
                'img' => 'images2/komod_z.jpg',
            ],
            ];

            $goods = [
            [
                'categoriesId' => 'shoeCabinet',
                'id' => 1,
                'name' => 'Обувница К-2',
                'desc' => 'Рады помочь сделать Ваш дом уютнее с пользой для кошелька.',
                'img' => 'images2/ob2.png',
                'price' => '2790 рублей',
            ],
            [
                'categoriesId' => 'shoeCabinet',
                'id' => 2,
                'name' => 'Обувница К-3',
                'desc' => 'Рады помочь сделать Ваш дом уютнее с пользой для кошелька.',
                'img' => 'images2/ob2.png',
                'price' => '3490 рублей',
            ],
            [
                'categoriesId' => 'shoeCabinet',
                'id' => 3,
                'name' => 'Обувница К-4',
                'desc' => 'Рады помочь сделать Ваш дом уютнее с пользой для кошелька.',
                'img' => 'images2/ob2.png',
                'price' => '3990 рублей',
            ],
            [
                'categoriesId' => 'dresser',
                'id' => 1,
                'name' => 'Комод НК-1',
                'desc' => 'Рады помочь сделать Ваш дом уютнее с пользой для кошелька.',
                'img' => 'images2/ob2.png',
                'price' => '4490 рублей',
            ],
            [
                'categoriesId' => 'dresser',
                'id' => 2,
                'name' => 'Комод НК-2',
                'desc' => 'Рады помочь сделать Ваш дом уютнее с пользой для кошелька.',
                'img' => 'images2/ob2.png',
                'price' => '4490 рублей',
            ],
            [
                'categoriesId' => 'dresser',
                'id' => 3,
                'name' => 'Комод НК-3',
                'desc' => 'Рады помочь сделать Ваш дом уютнее с пользой для кошелька.',
                'img' => 'images2/ob2.png',
                'price' => '4990 рублей',
            ],
            ];

        $page = $_GET['page'];

        if (!isset($page)) {
            require('templates/main.php');
        } elseif ($page == 'shopCategories') {
            require('templates/shopCategories.php');
        } elseif ($page == 'shoeCabinet') {
            $categoriesId = $_GET['id'];
            $categoriesGoods = [];
            foreach ($goods as $good) {
                if ($good['categoriesId'] == $id) {
                    array_push($categoriesGoods, $good);
            }
        }
            require('templates/pageGood.php');
        } elseif ($page == 'dresser') {
            $categoriesId = $_GET['Id'];
            $categoriesGoods = [];
            foreach ($goods as $good) {
                if ($good['categories'] == $id) {
                    array_push($categoriesGoods, $good);
            }
        }
            require('templates/pageGood.php');
        }elseif ($page == 'openedProduct') {
            $id = $_GET['id'];
            $good = null;
            foreach ($goods as $good) {
                if ($good['id'] == $id) {
                    $goods = $good;
                    break;
            }
        }
            require('templates/openedProduct.php');
        } elseif ($page == 'orderForm') {
            require('templates/orderForm.php');
        }
        /*foreach ($goods as $good) {
            echo $good['id'] . '<br>';
            echo $good['name'] . '<br>';
            echo $good['desk'] . '<br>';
            echo $good['img'] . '<br>';
            echo $good['price'] . '<br>';
            echo '<hr>';
        }*/
    ?>
</div>

<footer>
    <div id="footerInside">

        <div id="contacts">
            <div class="contactWrap">
                <img src="images2/envelope.svg" class="contactIcon">
                zel-mebel89@mail.ru
            </div>
            <div class="contactWrap">
                <img src="images2/phone-call.svg" class="contactIcon">
                +7 (915) 335-43-56
            </div>
            <div class="contactWrap">
                <img src="images2/placeholder.svg" class="contactIcon">
                Москва, Зеленоград
            </div>
        </div>

        <div id="footerNav">
            <a href="/">Главная</a>
            <a href="index.php?page=shopCategories">Магазин</a>
        </div>

        <div id="social">
            <a href="https://vk.com/polno_mebeli" target="_blank"><img class="socialItem" src="images2/vk.png"></a>
            <a href="https://www.instagram.com/zel_mebel/" target="_blank"><img class="socialItem" src="images2/ig.png"></a>
            <a href="https://t.me/zelmebel89" target="_blank"><img class="socialItem" src="images2/tg.png"></a>
        </div>

        <div id="copyrights">&copy; Polno Mebeli</div>
    </div>
</footer>

</body>
</html>