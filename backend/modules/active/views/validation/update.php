<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model domain\v4\active\models\Validation */

$this->title = 'Update Validation: ' . $model->id;
Yii::$app->navigation->breadcrumbs->create('Validations', ['index']);
Yii::$app->navigation->breadcrumbs->create($model->id, ['view', 'id' => $model->id]);
Yii::$app->navigation->breadcrumbs->create('Update');
?>
<div class="validation-update">

    <h1><?= Html::encode($this->title) ?></h1>
	
	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>