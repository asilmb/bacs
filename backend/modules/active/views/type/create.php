<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model domain\v4\active\models\ActiveType */

$this->title = t('active/type', 'Create Active Type');
Yii::$app->navigation->breadcrumbs->create(['active/type', 'Active Types'], ['index']);
Yii::$app->navigation->breadcrumbs->create($this->title);
?>
<div class="active-type-create">
	
	<h1><?= Html::encode($this->title) ?></h1>
	
	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>