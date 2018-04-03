<div id="promoShop">
    <h1 id="promoTextShop">
        <?php echo $good['name']; ?>
    </h1>
</div>

<div id="shopWrap"></div>
<div>
    <?php foreach ($goods as $good): ?>
        <div class="shopUnit">
            <img src="<?php echo $good['img']; ?>"/>

            <div class="shopUnitName">
                <?php echo $good['name']; ?>
            </div>
            <div class="shopUnitShortDesc">
                <?php echo $good['desc']; ?>
            </div>
            <div id="openedProduct-price">
                Цена: <?php echo $good['price']; ?>
            </div>
            <a href="index.php?page=openedProduct&id=<?php echo $good['id']; ?>" class="shopUnitMore">
                Подробнее
            </a>
         </div>
<?php endforeach; ?>
</div>