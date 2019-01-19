<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model domain\v4\active\models\ActiveType */

$this->title = t('bank/main', 'Update {modelClass}: ', [
		'modelClass' => 'Active Type',
	]) . $model->title;
\App::$domain->navigation->breadcrumbs->create(['bank/main', 'Active Types'], ['index']);
\App::$domain->navigation->breadcrumbs->create($model->title,  ['view', 'id' => $model->id]);
\App::$domain->navigation->breadcrumbs->create(['bank/main', 'Update']);
?>
<div class="active-type-update">
	
	<!--<h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
	
	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>