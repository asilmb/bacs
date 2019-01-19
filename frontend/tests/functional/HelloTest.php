<?php

namespace tests\unit\helpers;

use yii2lab\app\domain\helpers\EnvService;
use yii2lab\test\Test\Rest;

class HelloTest extends Rest {
	
	public function testExample() {
		$this->tester->sendGET($this->url('/'));
		$this->tester->seeResponseCodeIs(200);
		$content = $this->tester->grabResponse();
		$this->tester->assertContains('', $content);
	}
	
	protected function url($uri = null) {
		$url = EnvService::getUrl('frontend', 'index-test.php');
		if(!empty($uri)) {
			$url .= SL . $uri;
		}
		return $url;
	}
	
}
