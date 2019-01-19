<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model domain\v4\active\models\Validation */

$this->title = 'Create Validation';
Yii::$app->navigation->breadcrumbs->create('Validations', ['index']);
Yii::$app->navigation->breadcrumbs->create($this->title);
?>
<div class="validation-create">

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>