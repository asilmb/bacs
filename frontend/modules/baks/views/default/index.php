<?php

/* @var $this yii\web\View */

$this->title = t('account/main', 'title');

?>

<div class="section-main section">
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
<div class="section-catalog section">
    <div class="catalog-present">
        <div class="catalog-left">
            <div class="catalog-title">
                <h2 class="catalog-title_title">КАТАЛОГ</h2>
                <p class="catalog-title_sub-title">Заголовок, какие крутейшие товары,
                    и качество на высоте</p>
            </div>
            <ul class="catalog-collections">
                <li class="catalog-collections_item girl"><a href="#!">Женская коллекция</a></li>
                <li class="catalog-collections_item men"><a href="#!">мужская коллекция</a></li>
                <li class="catalog-collections_item travel"><a href="#!">путешествия</a></li>
            </ul>
        </div>
        <div class="catalog-right">
            <img src="images/collection/girl_collection.png" class="catalog-present_item girl present_item_active" >
            <img src="images/collection/men_collection.png" class="catalog-present_item man" >
            <img src="images/collection/girl_collection.png" class="catalog-present_item travel" >
        </div>

    </div>
</div>




