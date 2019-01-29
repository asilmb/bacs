<?php
/** @var \domain\v1\finance\entities\StockEntity $item */
use domain\v1\finance\enums\StockTypeEnum;


?>
<a class="owl-carousel__item stock-carousel_item <?= $item->stockType == StockTypeEnum::INFO ? 'stock-carousel_item--info' : 'stock-carousel_item--full' ?>">
    <img class="stock-carousel_item_img" src="/images/stocks/<?= $item->image ?>" alt="">
    <div class="stock-carousel_item_info stock-item">
        <?php if(!empty($item->date)): ?>
        <p class="stock-item_date"><?= $item->date ?></p>

        <?php endif;?>
        <?php if(!empty($item->title)): ?>
        <h4 class="stock-item_title"><?= $item->title ?></h4>
        <?php endif;?>
        <?php if(!empty($item->descPresent)): ?>
        <p class="stock-item_describe"><?= $item->descPresent ?></p>
        <?php endif;?>
        <?php if(!empty($item->descFull)): ?>
        <div class="stock-item_more-btn"></div>
        <?php endif;?>
    </div>
</a>