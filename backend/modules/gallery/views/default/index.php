<?php

/* @var $this yii\web\View */

use yii\grid\GridView;
use yii\helpers\Html;


use yii2lab\extension\web\grid\ActionColumn;

$baseUrl = $this->context->getBaseUrl();

$columns = [
    [
        'attribute' => 'id',
        'label' => '#',
    ],
    [
        'attribute' => 'title',
        'label' => Yii::t('finance/gallery', 'title'),
    ],
    [
        'attribute' => 'desc',
        'label' => Yii::t('finance/gallery', 'desc'),
    ],
    [
        'attribute' => 'image',
        'label' => 'Миниатюра',
        'value' => function ($data) {
            return $this->context->renderPartial('mini',compact('data'));
        },
        'format'=>'html'
    ],
	[
		'class' => ActionColumn::class,
		'template' => '{view}{update} {delete}'
	],
];

?>
	<style>
		.backend-mini{
            height: 100px;
            width: auto;
		}
	</style>
<?= GridView::widget([
	'dataProvider' => $dataProvider,
	'layout' => '{summary}{items}',
	'columns' => $columns,
]); ?>

<?= Html::a(Yii::t('action', 'create'), $baseUrl . 'create', ['class' => 'btn btn-success']) ?>