<?php

/* @var $this yii\web\View */

$this->title = t('account/main', 'title');

?>

<div class="section-main section clearfix" id="to-custumers">
    <div class="main-present">
        <div class="owl-carousel owl-round-pagination">
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
                    стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный
                    печатник
                    создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="section-catalog section clearfix" id =collection>
    <div class="catalog-present active">
        <div class="catalog-present_area catalog-present_area--left">
            <div class="catalog-present_title catalog-present-title">
                <h2 class="catalog-present-title_title">КАТАЛОГ</h2>
                <p class="catalog-present-title_sub-title">Заголовок, какие крутейшие товары,
                    и качество на высоте</p>
            </div>
            <ul class="catalog-present_collections catalog-present-collections">
                <li class="catalog-present-collections_selector-wrapper">
                    <a href="#!"
                       class="catalog-present-collections_selector girl">Женская
                        коллекция</a></li>
                <li class="catalog-present-collections_selector-wrapper"><a href="#!"
                                                                            class="catalog-present-collections_selector man">мужская
                        коллекция</a></li>
                <li class="catalog-present-collections_selector-wrapper"><a href="#!"
                                                                            class="catalog-present-collections_selector travel">путешествия</a>
                </li>
            </ul>
            <div class="catalog-present_comment">
                <p>
                    Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является
                    стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный
                    печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки
                    образцов.
                </p>
            </div>
        </div>
        <div class="catalog-present_area catalog-present_area--right catalog-present-collections">
            <img src="images/collections/girl_collection.png" class="catalog-present-collections_item girl active">
            <img src="images/collections/men_collection.png" class="catalog-present-collections_item man">
            <img src="images/collections/travel_collection.png" class="catalog-present-collections_item travel">
        </div>

    </div>
    <div class="catalog-views ">
        <h2 class="catalog-views_title">КАТАЛОГ</h2>
        <div class="catalog-views_navigator views_navigator">
            <a href="#!" class="views_navigator_selector girl active">
                Женская коллекция
            </a>
            <a href="#!" class="views_navigator_selector man">
                мужская коллекция
            </a>
            <a href="#!" class="views_navigator_selector travel">
                путешествия
            </a>
        </div>
        <div class="catalog-women custom-catalog ">
            <p class="custom-catalog_desc">Краткое описание под каждую коллекцию.Lorem Ipsum - это текст-"рыба",
                часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на
                латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и
                форм шрифтов, используя Lorem Ipsum для распечатки образцов.</p>
            <div class="owl-carousel custom-catalog_view catalog-view">
                <?php if (!empty($womenCollection)) {
                    foreach ($womenCollection as $womenCollectionItem) {
                        echo $this->context->renderPartial('collectionItem', ['item' => $womenCollectionItem]);
                    }
                }
                ?>
            </div>
        </div>
        <div class="catalog-man custom-catalog">
            <p class="custom-catalog_desc">Краткое описание под каждую коллекцию.Lorem Ipsum - это текст-"рыба",
                часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на
                латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и
                форм шрифтов, используя Lorem Ipsum для распечатки образцов.</p>
            <div class="owl-carousel custom-catalog_view catalog-view">
                <?php if (!empty($menCollection)) {
                    foreach ($menCollection as $menCollectionItem) {
                        echo $this->context->renderPartial('collectionItem', ['item' => $menCollectionItem]);
                    }
                }
                ?>
            </div>
        </div>
        <div class="catalog-travel custom-catalog">
            <p class="custom-catalog_desc">Краткое описание под каждую коллекцию.Lorem Ipsum - это текст-"рыба",
                часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на
                латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и
                форм шрифтов, используя Lorem Ipsum для распечатки образцов.</p>
            <div class="owl-carousel custom-catalog_view catalog-view">
                <?php if (!empty($travelCollection)) {
                    foreach ($travelCollection as $travelCollectionItem) {
                        echo $this->context->renderPartial('collectionItem', ['item' => $travelCollectionItem]);
                    }
                }
                ?>
            </div>
        </div>
        <div class="catalog-views_close-btn"><p>Закрыть </p><span class="close"></span></div>
    </div>
</div>
<div id="section-stock" class="section-stock section clearfix">
    <h2 class="section-stock_title">Акции</h2>
    <div class="owl-carousel stock-carousel">
        <?php
        foreach ($stocks as $stock)
            echo $this->context->renderPartial('stockItem', ['item' => $stock]);
        ?>
    </div>
</div>
<div class="section-about section clearfix" id="about">
    <div class="section-about_area">
        <div class="section-about_area_info">
            <img src="/images/about-label.png" class="section-about_area-label">
            <p class="section-about_area-text">
                Lorem Ipsum - это текст-"рыба", часто используемый в печати и
                вэб-дизайне. Lorem Ipsum является
                стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник
                создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.
                Lorem
                Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный
                дизайн.
                Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х
                годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах
                которых

            </p>
        </div>
        <img class="section-about_area-photo" src="/images/about-photo.png" alt="">
    </div>
    <div class="section-about_map map">
        <div class="map-contacts">
            <h4 class="map-contacts_title">Контакты</h4>
            <div class="map-contacts_info contacts">
                <div class="contacts_info">
                    <p class="contacts_info-item"> +7 (777) 252-77-52</p>
                    <p class="contacts_info-item"> +7 (777) 252-77-52</p>
                    <p class="contacts_info-item"> Pochta@mail.ru</p>
                </div>
                <div class="contacts_city">
                    <p class="contacts_city-name">г.Астана:</p>
                    <div class="contacts_city-info-table">

                        <p class="field">ТРЦ «Мега», Кургальджинское шоссе 1,
                            2 этаж</p>
                        <div class="dots">
                        </div>
                        <p class="field">тел +7(7172)79-09-49</p>

                    </div>
                </div>
                <div class="contacts_city">
                    <p class="contacts_city-name">г.Астана:</p>
                    <div class="contacts_city-info-table">

                        <p class="field">ТРЦ «Мега», Кургальджинское шоссе 1,
                            2 этаж</p>
                        <div class="dots">
                        </div>
                        <p class="field">тел +7(7172)79-09-49</p>

                    </div>
                    <div class="contacts_city-info-table">

                        <p class="field">ТРЦ «Мега», Кургальджинское шоссе 1,
                            2 этаж</p>
                        <div class="dots">
                        </div>
                        <p class="field">тел +7(7172)79-09-49</p>

                    </div>
                    <div class="contacts_city-info-table">

                        <p class="field">ТРЦ «Мега», Кургальджинское шоссе 1,
                            2 этаж</p>
                        <div class="dots">
                        </div>
                        <p class="field">тел +7(7172)79-09-49</p>

                    </div>
                    <div class="contacts_city-info-table">

                        <p class="field">ТРЦ «Мега», Кургальджинское шоссе 1,
                            2 этаж</p>
                        <div class="dots">
                        </div>
                        <p class="field">тел +7(7172)79-09-49</p>

                    </div>
                    <div class="contacts_city-info-table">

                        <p class="field">ТРЦ «Мега», Кургальджинское шоссе 1,
                            2 этаж</p>
                        <div class="dots">
                        </div>
                        <p class="field">тел +7(7172)79-09-49</p>

                    </div>
                </div>
                <div class="contacts_city">
                    <p class="contacts_city-name">г.Астана:</p>
                    <div class="contacts_city-info-table">

                        <p class="field">ТРЦ «Мега», Кургальджинское шоссе 1,
                            2 этаж</p>
                        <div class="dots">
                        </div>
                        <p class="field">тел +7(7172)79-09-49</p>

                    </div>
                </div>
                <div class="contacts_add-info">
                    <p>Жалобы и Предложения принимаются на Bags_accessorize@mail.ru</p>
                </div>
            </div>


        </div>
        <div class="map-geo">
            <div class="map-geo_cities geo-cities">
                <p class="geo-cities_city karagandy">Караганда</p>
                <p class="geo-cities_city astana active">Темиртау</p>
            </div>
            <div class="map-geo_yandex astana active">
                <script type="text/javascript" charset="utf-8" async
                        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae94648661b7a08616f044e9b0500b5e8e52886edeb1d32ca395d2c3b70e77048&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
            <div class="map-geo_yandex karagandy">
                <script type="text/javascript" charset="utf-8" async
                        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5c65a68098e62c67b3dad5fc5ff02623a52e2e217c59c3dd8bd3f31aa66274f1&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </div>
</div>