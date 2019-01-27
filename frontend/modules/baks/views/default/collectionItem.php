<?php
/** @var \domain\v1\finance\entities\CollectionEntity $item */
?>
<a class="owl-carousel__item catalog-view_item ">
    <div class="catalog-view_item_img-wrapper">
        <img src="/images/collections/<?= $item->collectionType . '/' . $item->image ?>" alt="">
    </div>
    <div class="catalog-view_item_info view-info">
        <p class="view-info_describe"> <?= $item->desc ?></p>
        <p class="view-info_describe"><span class="view-info_describe-name">Бренд:</span>
            <?= $item->brand ?>
        </p>
        <p class="view-info_describe"><span class="view-info_describe-name">Цвет:</span>
            <?= $item->color ?>
        </p>
        <p class="view-info_describe"><span class="view-info_describe-name">Страна бренда:</span>
            <?= $item->brandCountry ?>
        </p>
        <p class="view-info_describe"><span class="view-info_describe-name">Производитель:</span>
            <?= $item->madeIn ?>
        </p>
        <p class="view-info_describe"><span class="view-info_describe-name">Коллекция:</span>
            <?= $item->collection ?>
        </p>
        <p class="view-info_describe"><span class="view-info_describe-name">Состав:</span>
            <?= $item->composition ?>
        </p>
        <p class="view-info_describe"><span class="view-info_describe-name">Размер:</span>
            <?= $item->size ?>
        </p>
        <p class="view-info_price">
            <?= $item->price ?>
        </p>

    </div>
</a>