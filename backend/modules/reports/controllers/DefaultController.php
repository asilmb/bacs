<?php

namespace frontend\modules\collection\controllers;


use domain\v1\finance\forms\CollectionForm;
use frontend\modules\reports\entities\ActionEntity;
use frontend\modules\reports\models\UploadForm;
use Yii;
use yii\web\UploadedFile;
use yii2lab\domain\data\EntityCollection;
use yii2lab\domain\data\Query;
use yii2lab\domain\web\ActiveController as Controller;
use yii2lab\extension\arrayTools\helpers\ArrayIterator;
use yii2lab\extension\yii\helpers\ArrayHelper;

class DefaultController extends Controller {

	public $serviceName = 'finance.process';
	public $formClass = CollectionForm::class;
	public $service = 'finance.process';


	public function actionDownload() {
		$model = new UploadForm();
		if(Yii::$app->request->isPost) {
			$model->imageFile = UploadedFile::getInstance($model, 'imageFile');
			if($model->upload()) {
				$currentTable = $this->scan($model->imageFile->name, true);
				return $this->render('download', ['model' => $model, 'currentTable' => $currentTable]);
			}
		}

		return $this->render('download', ['model' => $model]);
	}

	private function scan($fileName) {
		$row = 0;
		$path_to_file = Yii::getAlias('@webroot') . '/uploads/';

		$inputFileType = \PHPExcel_IOFactory::identify($path_to_file . $fileName);
		$objReader = \PHPExcel_IOFactory::createReader($inputFileType);
		$objPHPExcel = $objReader->load($path_to_file . $fileName);
		$sheetData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
		$entityCollection = new EntityCollection(ActionEntity::class);

		foreach($sheetData as $columnNumber => $column) {
			if($columnNumber == 1) {
				continue;
			}
			foreach($column as $rowName => $rowValue) {
				if($rowName == 'A') $column['name'] = $column[$rowName];
				if($rowName == 'B') $column['date'] = $column[$rowName];
				if($rowName == 'C') $column['period'] = $column[$rowName];
				if($rowName == 'D') $column['amount'] = $column[$rowName];
				if($rowName == 'E') $column['category'] = $column[$rowName];
				unset($column[$rowName]);
			}
			$actionEntity = new ActionEntity($column);
			$entityCollection->add($actionEntity);

		}
		return $entityCollection;
	}

	public function actionCalc() {

		$entityCollection = ArrayHelper::toArray( json_decode(Yii::$app->request->getBodyParam('entityCollection')));

		$periodDictionary = [];
		$categoryDictionary = [];

		foreach($entityCollection as $columnNumber => $column) {
			if(!(in_array($column['period'], $periodDictionary))) {
				$periodDictionary[] = $column['period'];
			}
			if(!(in_array($column['category'], $categoryDictionary))) {
				$categoryDictionary[] = $column['category'];
			}
		}
		$searchCollections = new ArrayIterator;
		$searchCollections->setCollection($entityCollection);

		$inCategoryWorst = [];
		foreach($categoryDictionary as $currentCategory) {
			$query = Query::forge();
			$query->where('category', $currentCategory);
			$assignments = $searchCollections->all($query);
			$inCategoryWorst[$currentCategory] = $this->getWorstByPeriod($assignments);
		}

		$inPeriodWorst = [];
		foreach($periodDictionary as $currentPeriod) {
			$query = Query::forge();
			$query->where('period', $currentPeriod);
			$assignments = $searchCollections->all($query);
			$inPeriodWorst[$currentPeriod] = $this->getWorstByPeriod($assignments);
		}

		return $this->render('result', ['inCategoryWorst' => $inCategoryWorst, 'inPeriodWorst' => $inPeriodWorst]);
	}

	private function getWorstByPeriod($allByCertainSearch) {

		$worst = $allByCertainSearch[0];
		foreach($allByCertainSearch as $key => $entity) {

			if(!empty($allByCertainSearch[$key + 1])) {
				if($worst['amount'] < $allByCertainSearch[$key + 1]['amount']) {
					$worst = $allByCertainSearch[$key + 1];
				}
			}
		}
		return $worst;
	}
}
