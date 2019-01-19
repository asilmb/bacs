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

<div class="wrap">
    <header class="main-header">

    </header>
    <div class="container">

		<?= $content ?>
    </div>
</div>

<div class="page-footer">
    <div class="container">

    </div>
</div>

<?php Page::endDraw() ?>
