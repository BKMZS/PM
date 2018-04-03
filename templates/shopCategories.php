<div id="promoShop">
    <h1 id="promoTextShop">
        Каталог товаров
    </h1>
</div>

<div id="shopWrap"></div>
<div>
    <?php foreach ($categories as $good): ?>
        <div class="shopUnit">
            <img src="<?php echo $good['img']; ?>"/>

            <div class="shopUnitName">
                <?php echo $good['name']; ?>
            </div>
            <div class="shopUnitShortDesc">
                <?php echo $good['desc']; ?>
            </div>
            <a href="index.php?page=<?php echo $good['id']; ?>" class="shopUnitMore">
                Перейти в каталог
            </a>
        </div>
    <?php endforeach; ?>
</div>
            <!--<div id="shopOb">
            <a href="index.php?page=shopOb">
                Перейти в каталог
            </a>
            </div>
            <div>
            <a href="index.php?page=shopKomod">
                Перейти в каталог
            </a>
            </div>-->