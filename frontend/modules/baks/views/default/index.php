<?php

/* @var $this yii\web\View */

$this->title = t('account/main', 'title');
use yii\widgets\ActiveForm;

?>

<div class="section-main section clearfix" id="to-custumers">
    <div class="main-present <?= !($sendForm->hasErrors() || $sendForm1->hasErrors() || $sendForm2->hasErrors()) ? 'active': ''?>">
        <div class="owl-carousel owl-round-pagination">
            <?php foreach ($gallery as $itemX):?>
                <a class="owl-carousel__item">
                    <img src="/images/gallery/<?= $itemX->image ?>" alt="">
                </a>
            <?php endforeach;?>
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
    <div class="main-send main-send--renter <?= $sendForm->hasErrors() ? 'active': ''?> ">
        <div class="main-send_side">
            <div class="main-send_title send-title">
                <div class="send-title_title">
                    <h2>
                        Уважаемые Арендодатели!
                    </h2>
                </div>
                <div class="send-title_sub-title">
                    <h3>
                        здесь вы можете ознакомиться
                        с правиламии и связаться с нами
                    </h3>
                </div>
            </div>
            <div class="main-send_body send-body">
                <div class="send-body_title">
                    <h4>
                        Заголовок
                    </h4>
                </div>
                <div class="send-body_text">
                    <p>
                        Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum
                        является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий
                        безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum
                        для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять
                        веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили
                        публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время,
                        программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem
                        Ipsum.
                    </p>
                </div>
                <div class="send-body_title">
                    <h4>
                        Заголовок
                    </h4>
                </div>
                <div class="send-body_text">
                    <p>
                        Тел: +7 (222) 333-44-55
                    </p>
                    <p>
                        Тел: +7 (222) 333-44-55
                    </p>

                </div>
            </div>
        </div>
        <div class="main-send_side ">
                <?php $form = ActiveForm::begin(
                        [   'action' => '/send',
                            'options' => [
                                'class' => 'send-form'
                            ]
                        ]); ?>
                <div class="send-form_wrapper">
                    <?= $form->field($sendForm, 'name')->textInput(['class' => 'send-form_input', 'placeholder' => "Имя"])->label(''); ?>
                    <?= $form->field($sendForm, 'surname')->textInput(['class' => 'send-form_input', 'placeholder' => "Фамилия"])->label(''); ?>
                    <?= $form->field($sendForm, 'orgName')->textInput(['class' => 'send-form_input', 'placeholder' => "Наименование Организации"])->label(''); ?>
                    <?= $form->field($sendForm, 'contactFace')->textInput(['class' => 'send-form_input', 'placeholder' => "Контактное лицо"])->label(''); ?>
                    <?= $form->field($sendForm, 'phone')->textInput(['class' => 'send-form_input', 'placeholder' => "Телефон"])->label(''); ?>
                    <?= $form->field($sendForm, 'email')->textInput(['class' => 'send-form_input', 'placeholder' => "email"])->label(''); ?>
                </div>

                <div class='send-form_wrapper send-form_wrapper--row'>
                    <input class='send-form_btn' type="submit" value="Отправить">
                    <div class="send-form_btn">
                        Загрузить КП
                        <?= $form->field($sendForm, 'file')->fileInput(['class' =>  'inner-input'])->label(''); ?>
                    </div>

                </div>
                <?php ActiveForm::end(); ?>

        </div>
    </div>
    <div class="main-send main-send--provider <?= $sendForm1->hasErrors() ? 'active': ''?> ">
        <div class="main-send_side">
            <div class="main-send_title send-title">
                <div class="send-title_title">
                    <h2>
                        Уважаемые Поставщики!
                    </h2>
                </div>
                <div class="send-title_sub-title">
                    <h3>
                        здесь вы можете ознакомиться
                        с правиламии и связаться с нами
                    </h3>
                </div>
            </div>
            <div class="main-send_body send-body">
                <div class="send-body_title">
                    <h4>
                        Заголовок
                    </h4>
                </div>
                <div class="send-body_text">
                    <p>
                        Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum
                        является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий
                        безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum
                        для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять
                        веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили
                        публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время,
                        программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem
                        Ipsum.
                    </p>
                </div>
                <div class="send-body_title">
                    <h4>
                        Заголовок
                    </h4>
                </div>
                <div class="send-body_text">
                    <p>
                        Тел: +7 (222) 333-44-55
                    </p>
                    <p>
                        Тел: +7 (222) 333-44-55
                    </p>

                </div>
            </div>
        </div>
        <div class="main-send_side ">
            <?php $form = ActiveForm::begin(
                [   'action' => '/send1',
                    'options' => [
                        'class' => 'send-form'
                    ]
                ]); ?>
            <div class="send-form_wrapper">
                <?= $form->field($sendForm1, 'name')->textInput(['class' => 'send-form_input', 'placeholder' => "Имя"])->label(''); ?>
                <?= $form->field($sendForm1, 'surname')->textInput(['class' => 'send-form_input', 'placeholder' => "Фамилия"])->label(''); ?>
                <?= $form->field($sendForm1, 'orgName')->textInput(['class' => 'send-form_input', 'placeholder' => "Наименование Организации"])->label(''); ?>
                <?= $form->field($sendForm1, 'contactFace')->textInput(['class' => 'send-form_input', 'placeholder' => "Контактное лицо"])->label(''); ?>
                <?= $form->field($sendForm1, 'phone')->textInput(['class' => 'send-form_input', 'placeholder' => "Телефон"])->label(''); ?>
                <?= $form->field($sendForm1, 'email')->textInput(['class' => 'send-form_input', 'placeholder' => "email"])->label(''); ?>
            </div>

            <div class='send-form_wrapper send-form_wrapper--row'>
                <input class='send-form_btn' type="submit" value="Отправить">
                <div class="send-form_btn">
                    Загрузить КП
                    <?= $form->field($sendForm1, 'file')->fileInput(['class' =>  'inner-input'])->label(''); ?>
                </div>

            </div>
            <?php ActiveForm::end(); ?>

        </div>
    </div>
    <div class="main-send main-send--gov <?= $sendForm2->hasErrors() ? 'active': ''?> ">
        <div class="main-send_side">
            <div class="main-send_title send-title">
                <div class="send-title_title">
                    <h2>
                        Уважаемые партнеры! (Госзакуп)
                    </h2>
                </div>
                <div class="send-title_sub-title">
                    <h3>
                        здесь вы можете ознакомиться
                        с правиламии и связаться с нами
                    </h3>
                </div>
            </div>
            <div class="main-send_body send-body">
                <div class="send-body_title">
                    <h4>
                        Заголовок
                    </h4>
                </div>
                <div class="send-body_text">
                    <p>
                        Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum
                        является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий
                        безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum
                        для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять
                        веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили
                        публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время,
                        программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem
                        Ipsum.
                    </p>
                </div>
                <div class="send-body_title">
                    <h4>
                        Заголовок
                    </h4>
                </div>
                <div class="send-body_text">
                    <p>
                        Тел: +7 (222) 333-44-55
                    </p>
                    <p>
                        Тел: +7 (222) 333-44-55
                    </p>

                </div>
            </div>
        </div>
        <div class="main-send_side ">
            <?php $form = ActiveForm::begin(
                [   'action' => '/send2',
                    'options' => [
                        'class' => 'send-form'
                    ]
                ]); ?>
            <div class="send-form_wrapper">
                <?= $form->field($sendForm2, 'name')->textInput(['class' => 'send-form_input', 'placeholder' => "Имя"])->label(''); ?>
                <?= $form->field($sendForm2, 'surname')->textInput(['class' => 'send-form_input', 'placeholder' => "Фамилия"])->label(''); ?>
                <?= $form->field($sendForm2, 'orgName')->textInput(['class' => 'send-form_input', 'placeholder' => "Наименование Организации"])->label(''); ?>
                <?= $form->field($sendForm2, 'contactFace')->textInput(['class' => 'send-form_input', 'placeholder' => "Контактное лицо"])->label(''); ?>
                <?= $form->field($sendForm2, 'phone')->textInput(['class' => 'send-form_input', 'placeholder' => "Телефон"])->label(''); ?>
                <?= $form->field($sendForm2, 'email')->textInput(['class' => 'send-form_input', 'placeholder' => "email"])->label(''); ?>
            </div>

            <div class='send-form_wrapper send-form_wrapper--row'>
                <input class='send-form_btn' type="submit" value="Отправить">
                <div class="send-form_btn">
                    Загрузить КП
                    <?= $form->field($sendForm2, 'file')->fileInput(['class' =>  'inner-input'])->label(''); ?>
                </div>

            </div>
            <?php ActiveForm::end(); ?>

        </div>
    </div>
    <div class="catalog-views_close-btn <?= $sendForm->hasErrors() || $sendForm1->hasErrors() || $sendForm2->hasErrors() ? 'active': ''?>"><p>Закрыть </p><span class="close"></span></div>
</div>
<div class="section-catalog section clearfix" id=collection>
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

                Baks Accessories создана в 2002 году.
                <br> <br>
                     Мы предлагаем высококачественную продукцию кожаных и галантерейных аксессуаров известных мировых марок производства Турции, Китая, Франции, Германии и России, каждая из которых имеет свою целевую аудиторию, ценовой сегмент, уникальные особенности, что позволяет удовлетворить потребности практически любого покупателя! Ассортимент и коллекции постоянно обновляются следуя модным тенденциям. Выбирая нашу продукцию Вы получаете гарантию качества, хорошее настроение и индивидуальность!
                <br> <br>


                Выбирая ЛУЧШЕЕ — выбирай BAKS!

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
                <p class="geo-cities_city karagandy active">Караганда</p>
                <p class="geo-cities_city astana ">Темиртау</p>
            </div>
            <div class="map-geo_yandex astana ">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4f08b96a91e8edc08ecf2279ca751f8f0deec6af7deaba0dbdaa492cfd155bed&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>            </div>
            <div class="map-geo_yandex karagandy active">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5e971fac8281e3d62359b09a8189e8d104b2605d025b0d5238e47ae0b4ae718b&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </div>
</div>