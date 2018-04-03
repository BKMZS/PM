<div id="promoShopKomod">
    <h1 id="promoTextShopKomod">
        Комоды
    </h1>
</div>

<div id="shopWrapKomod"></div>
<div>
    <?php foreach ($komod as $good): ?>
        <div class="shopUnitOb">
            <img src="<?php echo $good['img']; ?>"/>

            <div class="shopUnitNameOb">
                <?php echo $good['name']; ?>
            </div>
            <div class="shopUnitShortDescOb">
                <?php echo $good['desc']; ?>
            </div>
            <div id="openedProduct-priceOb">
                Цена: <?php echo $good['price']; ?>
            </div>
            <a href="index.php?page=productKomod&id=<?php echo $good['id']; ?>" class="shopUnitMoreOb">
                Подробнее
            </a>
         </div>
<?php endforeach; ?>
</div>