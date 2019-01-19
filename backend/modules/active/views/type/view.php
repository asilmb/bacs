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

    <p>
		<?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
		<?= Html::a('Delete', ['delete', 'id' => $model->id], [
			'class' => 'btn btn-danger',
			'data' => [
				'confirm' => 'Are you sure you want to delete this item?',
				'method' => 'post',
			],
		]) ?>
    </p>
	
	<?= DetailView::widget([
		'model' => $model,
		'attributes' => [
			'id',
			'parent_id',
			'title',
		],
	]) ?>


</div>

<?= Html::encode(t('active/field', 'fields')) ?>

<div class="box box-primary">
	<?= $this->render('/field/index', ['dataProvider' => $dataProvider, 'active_id' => $model->id]) ?>
</div>