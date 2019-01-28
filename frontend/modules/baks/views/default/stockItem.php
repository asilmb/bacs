<?php
/** @var \domain\v1\finance\entities\StockEntity $item */
use domain\v1\finance\enums\StockTypeEnum;


?>
<a class="owl-carousel__item stock-carousel_item <?= $item->stockType == StockTypeEnum::INFO ? 'stock-carousel_item--info' : 'stock-carousel_item--full' ?>">
    <img class="stock-carousel_item_img" src="/images/stocks/<?= $item->image ?>" alt="">
    <div class="stock-carousel_item_info stock-item">
        <p class="stock-item_date"><?= $item->date ?></p>
        <h4 class="stock-item_title"><?= $item->title ?></h4>
        <p class="stock-item_describe"><?= $item->descPresent ?></p>
        <div class="stock-item_more-btn"></div>
    </div>
</a>