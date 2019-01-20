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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="wrap">
    <div class="navigation-vertical navigation-vertical-left">
        <div class="navigation-vertical_logo">
            <img src="/images/menu/logo.png">
        </div>
        <div class="navigation-vertical_logo_menu-section menu-section">
            <a href="#" class ='menu-section_menu-item'>Женская коллекция</a>
            <a href="#" class ='menu-section_menu-item'>Мужская коллекция</a>
            <a href="#" class ='menu-section_menu-item'>Путешествия</a>
        </div>
        <div class="navigation-vertical_logo_menu-section menu-section menu-section--main-links">
            <a href="#" class ='menu-section_menu-item'>Акции</a>
            <a href="#" class ='menu-section_menu-item'>О нас</a>
            <a href="#" class ='menu-section_menu-item'>Контакты</a>
        </div>
        <div class="navigation-vertical_logo_menu-section menu-section menu-section--main-links">
            <a href="#" class ='menu-section_menu-item'>Госзакуп</a>
            <a href="#" class ='menu-section_menu-item'>Поставщикам</a>
            <a href="#" class ='menu-section_menu-item'>Арендаторам</a>
        </div>
    </div>

    <div class="container">
		<?= $content ?>
    </div>
    <div class="navigation-vertical navigation-vertical-right">
        <div class="navigation-vertical_social social-section">
            <a href="#" class ='social-section-item facebook'></a>
            <a href="#" class ='social-section-item inst'></a>
            <a href="#" class ='social-section-item vk'></a>
        </div>
        <div class="navigation-vertical_footer">
            <img src="/images/menu/footer.png">
        </div>

    </div>
</div>



<?php Page::endDraw() ?>
