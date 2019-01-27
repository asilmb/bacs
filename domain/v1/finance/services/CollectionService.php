<?php

namespace domain\v1\finance\services;

use domain\v1\finance\entities\CollectionEntity;
use domain\v1\finance\helpers\DateTimeHelper;
use domain\v1\finance\interfaces\services\CollectionInterface;
use yii2lab\domain\data\Query;
use yii2lab\domain\services\base\BaseActiveService;

/**
 * Class CollectionService
 *
 * @package domain\v1\finance\services
 *
 * @property-read \domain\v1\finance\Domain $domain
 * @property-read \domain\v1\finance\interfaces\repositories\CollectionInterface $repository
 */
class CollectionService extends BaseActiveService implements CollectionInterface {


	public function sort() {
		return [
			'attributes' => [
				'created_at',
			],
		];
	}

	/**
	 * @var CollectionEntity $processEntity
	 * @return array
	 */
	public function getDebtData() {
		$query = Query::forge();
		$processEntitiesCollection = $this->repository->all($query);

		$relust = [];
		foreach($processEntitiesCollection as $processEntity) {
			if($processEntity->operation->isIncome == true) {
				$relust[] = ['name' => 'Дебит', ''];
			} elseif($processEntity->operation->isIncome == false) {

			};
		}
		return;
	}
	/**
	 * @var CollectionEntity $processEntity
	 * @return array
	 */
	public function getDebtDates() {
		$query = Query::forge();
		$processEntitiesCollection = $this->repository->all($query);
		$relust = [];
		foreach($processEntitiesCollection as $processEntity) {
			prr(DateTimeHelper::getMonth($processEntity->created_at),1,1);
		}
		return;
	}
}
//{
//	name: 'Installation',
//	data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
//	}, {
//	name: 'Manufacturing',
//	data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
//	}