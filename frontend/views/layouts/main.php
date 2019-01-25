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
        <div class="menu-section_menu-item"><a href="#">Женская</a> <a href="#">коллекция</a></div>
        <div class="menu-section_menu-item"><a href="#">Мужская</a><a href="#">коллекция</a></div>
        <div class="menu-section_menu-item"><a href="#">Путешествия</a></div>
    </div>
    <div class="navigation-vertical_logo_menu-section menu-section menu-section--main-links">
        <div class="menu-section_menu-item"><a href="#">Акции</a></div>
        <div class="menu-section_menu-item"><a href="#">О нас</a></div>
        <div class="menu-section_menu-item"><a href="#">Контакты</a></div>
    </div>
    <div class="navigation-vertical_logo_menu-section menu-section menu-section--main-links">
        <div class="menu-section_menu-item"><a href="#">Госзакуп</a></div>
        <div class="menu-section_menu-item"><a href="#">Поставщикам</a></div>
        <div class="menu-section_menu-item"><a href="#">Арендаторам</a></div>
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
