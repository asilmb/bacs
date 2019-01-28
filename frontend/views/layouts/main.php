<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii2lab\extension\web\helpers\Page;
use yii2lab\navigation\domain\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use yii2lab\navigation\domain\widgets\Alert;

AppAsset::register($this);

?>

<?php Page::beginDraw() ?>


<div class="navigation-vertical navigation-vertical-left">
    <div class="navigation-vertical_logo">
        <img src="/images/menu/logo.png">
    </div>
    <div class="navigation-vertical_logo_menu-section menu-section">
        <div class="menu-section_menu-item girl">
            <a href="#collection">
                <p>Женская</p>
                <p>коллекция</p>
            </a>
        </div>
        <div class="menu-section_menu-item man">
            <a href="#collection">
                <p>Мужская</p>
                <p>коллекция</p>
            </a>
        </div>
        <div class="menu-section_menu-item travel"><a href="#collection">
                <p>Путешествия</p>
            </a></div>
    </div>
    <div class="navigation-vertical_logo_menu-section menu-section menu-section--main-links">
        <a href="#section-stock" class="menu-section_menu-item">Акции</a>
        <a href="#about" class="menu-section_menu-item">О нас</a>
        <a href="#contacts" class="menu-section_menu-item">Контакты</a>
    </div>
    <div class="navigation-vertical_logo_menu-section menu-section menu-section--main-links">
        <a href="#to-custumers" class="menu-section_menu-item">Госзакуп</a>
        <a href="#to-custumers" class="menu-section_menu-item">Поставщикам</a>
        <a href="#to-custumers" class="menu-section_menu-item">Арендаторам</a>
    </div>
</div>
<div class="container">
    <?= $content ?>
</div>
<div class="navigation-vertical navigation-vertical-right">
    <div class="navigation-vertical_social social-section">
        <a href="#" class='social-section-item facebook'></a>
        <a href="#" class='social-section-item inst'></a>
        <a href="#" class='social-section-item vk'></a>
    </div>
    <div class="navigation-vertical_footer">
        <img src="/images/menu/footer.png">
    </div>

</div>


<?php Page::endDraw() ?>
