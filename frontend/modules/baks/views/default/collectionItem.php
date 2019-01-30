<?php
/** @var \domain\v1\finance\entities\CollectionEntity $item */
?>
<a class="owl-carousel__item catalog-view_item ">
    <div class="catalog-view_item_img-wrapper">
        <img src="/images/collections/<?= $item->collectionType . '/' . $item->image ?>" alt="">
    </div>

    <div class="catalog-view_item_info view-info">
        <?php if(!empty($item->desc)): ?>
        <p class="view-info_describe"> <?= $item->desc ?></p>
        <?php endif;?>
        <?php if(!empty($item->brand)): ?>
        <p class="view-info_describe"><span class="view-info_describe-name">Бренд:</span>
            <?= $item->brand ?>
        </p>
        <?php endif;?>
        <?php if(!empty($item->color)): ?>
        <p class="view-info_describe"><span class="view-info_describe-name">Цвет:</span>
            <?= $item->color ?>
        </p>
        <?php endif;?>
        <?php if(!empty($item->brandCountry)): ?>
        <p class="view-info_describe"><span class="view-info_describe-name">Страна бренда:</span>
            <?= $item->brandCountry ?>
        </p>
        <?php endif;?>
        <?php if(!empty($item->madeIn)): ?>
        <p class="view-info_describe"><span class="view-info_describe-name">Производитель:</span>
            <?= $item->madeIn ?>
        </p>
        <?php endif;?>
        <?php if(!empty($item->collection)): ?>
        <p class="view-info_describe"><span class="view-info_describe-name">Коллекция:</span>
            <?= $item->collection ?>
        </p>
        <?php endif;?>
        <?php if(!empty($item->composition)): ?>
        <p class="view-info_describe"><span class="view-info_describe-name">Состав:</span>
            <?= $item->composition ?>
        </p>
        <?php endif;?>
        <?php if(!empty($item->size)): ?>
        <p class="view-info_describe"><span class="view-info_describe-name">Размер:</span>
            <?= $item->size ?>
        </p>
        <?php endif;?>
        <?php if(!empty($item->price)): ?>
        <p class="view-info_price">
            <?= $item->price ?> тг.
        </p>
        <?php endif;?>
    </div>
</a>