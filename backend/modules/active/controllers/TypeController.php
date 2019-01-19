<?php
namespace backend\modules\active\controllers;

use domain\v4\active\entities\TypeEntity;
use domain\v4\active\forms\ActiveTypeForm;


use yii2lab\domain\data\Query;
use yii2lab\navigation\domain\widgets\Alert;
use Yii;

use yii\data\ArrayDataProvider;
use yii\web\Controller;

class TypeController extends Controller {
	
	public function actions() {
		return [
			'index' => [
				'class' => 'backend\modules\active\actions\indexAction',
				'service' => Yii::$app->active->type,
				'view' => '/type'
			],
			'create' => [
				'class' => 'backend\modules\active\actions\CreateAction',
				'service' => Yii::$app->active->type,
				'form' => 'ActiveTypeForm',
				'model' => new ActiveTypeForm(),
				'view' => '/type'
			],
			'update' => [
				'class' => 'backend\modules\active\actions\UpdateAction',
				'service' => Yii::$app->active->type,
				'form' => 'ActiveTypeForm',
				'model' => new ActiveTypeForm(),
				'view' => '/type'
			],
			'delete' => [
				'class' => 'backend\modules\active\actions\DeleteAction',
				'service' => Yii::$app->active->type,
			],
		];
	}

	public function actionView($id) {
		$entity = Yii::$app->active->type->oneById($id);
		$query = new Query();
		$query->where('active_id',$entity->id);
		
		$dataProvider = new ArrayDataProvider([
			'allModels' => Yii::$app->active->field->all($query),
			'sort' => [
				'attributes' => ['id', 'parent_id', 'title'],
			],
			'pagination' => [
				'pageSize' => Yii::$app->params['pageSize'],
			],
		]);
		$form = new ActiveTypeForm();
		$form->setAttributes($entity->toArray(),false);
		return $this->render('view', [
			'model' => $form,
			'dataProvider' => $dataProvider
		]);
	}
}

