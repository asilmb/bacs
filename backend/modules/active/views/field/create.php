<?php

use yii\helpers\Html;


/* @var $this yii\web\View */


$this->title = t('active/type', 'Create Field');
Yii::$app->navigation->breadcrumbs->create(['active/type', 'Field'], ['index']);
Yii::$app->navigation->breadcrumbs->create($this->title);


?>
<div class="active-type-create">
	
	<h1><?= Html::encode($this->title) ?></h1>
	<?= $this->render('_form', [
		'model' => $model,
        'type' => !empty($type) ? $type : null
    ]) ?>

</div>

