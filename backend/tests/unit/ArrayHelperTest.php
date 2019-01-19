<?php
namespace backend\tests\unit\helpers;

use yii2lab\test\Test\Unit;
use yii\helpers\ArrayHelper;

class ArrayHelperTest extends Unit
{
	
	public function testArrayHelper()
	{
		$obj = new \stdClass();
		$obj->name  = 'Alex';
		$array = [
			'foo' => [
				'bar' => $obj,
			]
		];
		
		$value = ArrayHelper::getValue($array, 'foo.bar.name');
		expect($value)->equals('Alex');
	}

}
