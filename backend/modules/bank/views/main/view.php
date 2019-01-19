<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model domain\v4\active\models\Type */

$this->title = $model->title;
Yii::$app->navigation->breadcrumbs->create('Types', ['index']);
Yii::$app->navigation->breadcrumbs->create($this->title);
?>
<div class="type-view">
    <img src="<?= $model->logo_url ?>" />
    
    <p>
		<?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
		<?= Html::a('Delete', ['delete', 'id' => $model->id], [
			'class' => 'btn btn-danger',
			'data' => [
				'confirm' => 'Are you sure you want to delete this item?',
				'method' => 'post',
			],
		]) ?>

		<?= Html::a(t('bank/main', 'add_logo') ,['/bank/addLogo', 'id' => $model->id], ['class' => 'btn btn-success' ]) ?>

    </p>
	
	<?= DetailView::widget([
		'model' => $model,
		'attributes' => [
			'title',
			'description',
			'bik',
            'background_color',
            'font_color'
		],
	]) ?>


</div>



