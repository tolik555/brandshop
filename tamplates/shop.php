<h1>
    Каталог товаров
</h1>

<div>
    <?php foreach($goods as $key=>$good): ?>
    <div class="shopUnit">
        <img src="<? echo $good['img']; ?>" />

        <div class="shopUnitName">
            <? echo $good['name']; ?>
        </div>
        <div class="shopUnitShortDesc">
            <? echo $good['desc']; ?>
        </div>
        <div class="shopUnitPrice">
            Цена: <? echo $good['price']; ?>
        </div>
        <a href="/?page=product&id=<? echo $key; ?>" class="shopUnitMore">
        Подробнее
    </a>
    </div>
    <?php endforeach; ?>
</div>