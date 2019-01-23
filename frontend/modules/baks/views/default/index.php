<?php

/* @var $this yii\web\View */

$this->title = t('account/main', 'title');

?>

<div class="section-main section clearfix">
    <div class="main-present">
        <div class="owl-carousel">
            <a class="owl-carousel__item">
                <img src="/images/main-present-background.png" alt="">
                <div class="main-present_play-btn"></div>
            </a>
            <a class="owl-carousel__item">
                <img src="/images/main-present-background.png" alt="">
                <div class="main-present_play-btn"></div>
            </a>
            <a class="owl-carousel__item">
                <img src="/images/main-present-background.png" alt="">
                <div class="main-present_play-btn"></div>
            </a>
        </div>
        <div class="main-present_call-btn"><p>Обратный звонок</p></div>
        <div class="main-present_title present-title">
            <div class="present-title_title">
                <h2>
                    ЗАГОЛОВОК СЛАЙДЕРА,
                    НОВАЯ КОЛЛЕКЦИЯ 2019
                </h2>
            </div>
            <div class="present-title_sub-title">
                <p>
                    Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является
                    стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник
                    создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.

                </p>
            </div>

        </div>
    </div>
</div>
<div class="section-catalog section clearfix">
    <div class="catalog-present">
        <div class="catalog-present_area catalog-present_area--left">
            <div class="catalog-present_title catalog-present-title">
                <h2 class="catalog-present-title_title">КАТАЛОГ</h2>
                <p class="catalog-present-title_sub-title">Заголовок, какие крутейшие товары,
                    и качество на высоте</p>
            </div>
            <ul class="catalog-present_collections catalog-present-collections">
                <li class="catalog-present-collections_selector girl"><a href="#!">Женская коллекция</a></li>
                <li class="catalog-present-collections_selector men"><a href="#!">мужская коллекция</a></li>
                <li class="catalog-present-collections_selector travel"><a href="#!">путешествия</a></li>
            </ul>
        </div>
        <div class="catalog-present_area catalog-present_area--right catalog-present-collections">
            <img src="images/collections/girl_collection.png" class="catalog-present-collections_item girl active">
            <img src="images/collections/men_collection.png" class="catalog-present-collections_item man">
            <img src="images/collections/girl_collection.png" class="catalog-present-collections_item travel">
        </div>

    </div>
</div>




