<?php


use yii\bootstrap\Html;
use yii\grid\GridView;


$this->title = t('bank/main', 'title');

?>


    <div class="box box-primary">
		<?= GridView::widget([
			'dataProvider' => $dataProvider,
			'layout' => '{summary}{items}',
			'columns' => [
				[
					'attribute' => 'id',
					'label' => t('bank/main', 'id'),
				],
				[
					'attribute' => 'title',
					'label' => t('bank/main', 'title'),
				],
				[
					'attribute' => 'description',
					'label' => t('bank/main', 'description'),
				],
				[
					'class' => '\yii\grid\ActionColumn',
					'template' => '{update}{view}{delete}',
					'buttons' => [
						'update' => function ($url) {
							return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
								'title' => t('bank/main', 'update_action'),
							]);
						},
						'view' => function ($url) {
							return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
								'title' => t('active/field', 'view_action'),
							]);
						},
						'delete' => function ($url) {
							return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
								'title' => t('bank/main', 'delete_action'),
							]);
						},
					],
					'urlCreator' => function ($action, $model, $key, $index) {
						if ($action === 'update') {
							$url ='bank/update?id='.$model->id;
							return $url;
						}
						if ($action === 'view') {
							$url = 'bank/view?id=' . $model->id;
							return $url;
						}
						if ($action === 'delete') {
							$url ='bank/delete?id='.$model->id;
							return $url;
						}
					}
				],
			],
		
		
	]); ?>
    </div>

<?= Html::a(t('bank/main', 'Create'),'bank/create?type_id='.$dataProvider->allModels[0]->type_id, ['class' => 'btn btn-success']) ?>