<?php

namespace api\tests\unit\service\helpers;

use api\v5\modules\service\helpers\DynamicRulesHelper;
use Codeception\Configuration;
use Codeception\Test\Unit;

class DynamicRulesHelperTest extends Unit {
	
	protected $dynamicRulesHelper;
	
	public function _before() {
		$this->dynamicRulesHelper = new DynamicRulesHelper;
	}
	
	public function testFieldsToRules() {
		$data = $this->loadData();
		$rules = $this->dynamicRulesHelper->getRules($data['fields']);
		expect($data['rules'])->equals($rules);
		expect($data['fields'])->count(4);
		expect($data['rules'])->count(6);
	}
	
	public function testEmptyFieldsToRules() {
		$rules = $this->dynamicRulesHelper->getRules([]);
		expect([])->equals($rules);
	}
	
	protected function loadData() {
		$dataFile = Configuration::dataDir() . '/DynamicRulesHelper.php';
		return include($dataFile);
	}
	
}
