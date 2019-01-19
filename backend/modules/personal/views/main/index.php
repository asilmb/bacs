<?php


use yii\bootstrap\Html;
use yii\grid\GridView;


$this->title = t('personal/main', 'title');

?>


    <div class="box box-primary">
		<?= GridView::widget([
			'dataProvider' => $dataProvider,
			'layout' => '{summary}{items}',
			'columns' => [
				[
					'attribute' => 'id',
					'label' => t('personal/main', 'id'),
				],
				[
					'attribute' => 'title',
					'label' => t('personal/main', 'title'),
				],
				[
					'attribute' => 'description',
					'label' => t('personal/main', 'description'),
				],
				[
					'class' => '\yii\grid\ActionColumn',
					'template' => '{update}{view}{delete}',
					'buttons' => [
						'update' => function ($url) {
							return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
								'title' => t('personal/main', 'update_action'),
							]);
						},
						'view' => function ($url) {
							return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
								'title' => t('active/field', 'view_action'),
							]);
						},
						'delete' => function ($url) {
							return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
								'title' => t('personal/main', 'delete_action'),
							]);
						},
					],
					'urlCreator' => function ($action, $model, $key, $index) {
						if ($action === 'update') {
							$url ='bonus/update?id='.$model->id;
							return $url;
						}
						if ($action === 'view') {
							$url = 'bonus/view?id=' . $model->id;
							return $url;
						}
						if ($action === 'delete') {
							$url ='bonus/delete?id='.$model->id;
							return $url;
						}
					}
				],
			],
		
		
	]); ?>
    </div>

<?= Html::a(t('personal/main', 'Create'),'bonus/create?type_id='.$dataProvider->allModels[0]->type_id, ['class' => 'btn btn-success']) ?>