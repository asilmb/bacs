<?php

namespace frontend\modules\baks\controllers;

use domain\v1\finance\enums\CollectionTypeEnum;
use Yii;
use yii\web\Controller;
use yii2lab\domain\data\Query;

class DefaultController extends Controller {
	
	public function actionIndex(){
        $query = Query::forge();
        $query->where('collectionType', CollectionTypeEnum::MEN);
	    $menCollection = \App::$domain->finance->collection->all($query);
        $query2 = Query::forge();
        $query2->where('collectionType', CollectionTypeEnum::WOMEN);
        $womenCollection = \App::$domain->finance->collection->all($query2);
        $query3 = Query::forge();
        $query3->where('collectionType', CollectionTypeEnum::TRAVEL);
        $travelCollection = \App::$domain->finance->collection->all($query3);


        $stocks = \App::$domain->finance->stock->all();

		return $this->render('index', compact('travelCollection', 'menCollection', 'womenCollection','stocks'));
	}
	
}