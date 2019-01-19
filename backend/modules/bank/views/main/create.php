<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model domain\v4\active\models\ActiveType */

$this->title = t('bank/main', 'Create_bank_record');
Yii::$app->navigation->breadcrumbs->create(['bank/main', 'Active Types'], ['index']);
Yii::$app->navigation->breadcrumbs->create($this->title);
?>
<div class="active-type-create">
	
	<h1><?= Html::encode($this->title) ?></h1>
	
	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>