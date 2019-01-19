<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model domain\v4\active\models\ActiveType */

$this->title = t('active/type', 'Update {modelClass}: ', [
		'modelClass' => 'Active Type',
	]) . $model->title;
Yii::$app->navigation->breadcrumbs->create(['active/type', 'Active Types'], ['index']);
Yii::$app->navigation->breadcrumbs->create($model->title, ['view', 'id' => $model->id]);
Yii::$app->navigation->breadcrumbs->create(['active/type', 'Update']);
?>
<div class="active-type-update">
	
	<!--<h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
	
	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>