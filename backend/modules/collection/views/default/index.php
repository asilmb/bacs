<?php

/* @var $this yii\web\View */

use yii\grid\GridView;
use yii\helpers\Html;

use yii2lab\misc\yii\grid\TitleColumn;
use yii2lab\extension\web\grid\ActionColumn;
$this->title = Yii::t('finance/operation', 'list');

$baseUrl = $this->context->getBaseUrl();

$columns = [
	[
		'attribute' => 'desc',
		'label' => Yii::t('finance/collection', 'desc'),
	],
    [
        'attribute' => 'collection',
        'label' => Yii::t('finance/collection', 'collection'),
    ],
    [
        'attribute' => 'collectionType',
        'label' => Yii::t('finance/collection', 'collection_type'),
    ],
    [
        'attribute' => 'size',
        'label' => Yii::t('finance/collection', 'size'),
    ],
    [
        'attribute' => 'price',
        'label' => Yii::t('finance/collection', 'price'),
    ],
	[
		'class' => ActionColumn::class,
		'template' => '{view}{update} {delete}'
	],
];

?>

<?= GridView::widget([
	'dataProvider' => $dataProvider,
	'layout' => '{summary}{items}',
	'columns' => $columns,
]); ?>

<?= Html::a(Yii::t('action', 'create'), $baseUrl . 'create', ['class' => 'btn btn-success']) ?>