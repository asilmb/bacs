<?php

namespace api\v5\tests\functional\service;

use api\tests\functional\enums\AccountEnum;
use api\tests\FunctionalTester;
use Codeception\Util\HttpCode;
use common\fixtures\FavoriteFixture;
use common\fixtures\ServiceFieldFixture;
use common\fixtures\ServiceFieldValidationFixture;
use common\fixtures\ServiceFieldValueFixture;
use common\fixtures\ServiceFixture;
use yii2lab\test\RestCest;
use yii2lab\test\Util\HttpHeader;
use yii2lab\test\Util\Type;

class FavoriteCest extends RestCest {
	
	const URI = 'favorite';
	const URI_EXISTED_ITEM = 'favorite/1';
	const URI_NOT_EXISTED_ITEM = 'favorite/11111';
	
	public $format = [
		'id' => Type::INTEGER,
		'service_id' => Type::INTEGER,
		'name' => Type::STRING_OR_NULL,
		'parent_id' => Type::INTEGER_OR_NULL,
		'title' => Type::STRING,
		'description' => Type::STRING_OR_NULL,
		'picture' => Type::STRING_OR_NULL,
		'picture_url' => Type::STRING_OR_NULL,
		'synonyms' => Type::STRING_OR_NULL,
		'fields' => Type::ARR_OR_NULL,
	];
	
	public function fixtures() {
		$this->loadFixtures([
			ServiceFixture::class,
			ServiceFieldFixture::class,
			ServiceFieldValidationFixture::class,
			ServiceFieldValueFixture::class,
			FavoriteFixture::class,
		]);
	}
	
	public function getList(FunctionalTester $I) {
		$I->auth(AccountEnum::ADMIN);
		$I->sendGET(self::URI);
		$I->SeeResponseCodeIs(HttpCode::OK);
		$I->seeResponseMatchesJsonType($this->format);
		$I->seeListHttpHeaders([
			HttpHeader::TOTAL_COUNT => 2,
			HttpHeader::PAGE_COUNT => 1,
			HttpHeader::CURRENT_PAGE => 1,
			HttpHeader::PER_PAGE => 20,
		]);
	}
	
	public function getListOfUser1(FunctionalTester $I) {
		$I->auth(AccountEnum::USER);
		$I->sendGET(self::URI);
		$I->SeeResponseCodeIs(HttpCode::OK);
		$I->seeResponseMatchesJsonType($this->format);
		$I->seeListHttpHeaders([
			HttpHeader::TOTAL_COUNT => 3,
			HttpHeader::PAGE_COUNT => 1,
			HttpHeader::CURRENT_PAGE => 1,
			HttpHeader::PER_PAGE => 20,
		]);
	}
	
	public function getDetails(FunctionalTester $I) {
		$I->auth(AccountEnum::ADMIN);
		$I->sendGET(self::URI_EXISTED_ITEM);
		$I->SeeResponseCodeIs(HttpCode::OK);
		$I->seeResponseMatchesJsonType($this->format);
	}
	
	public function getDetailsNotExists(FunctionalTester $I) {
		$I->auth(AccountEnum::ADMIN);
		$I->sendGET(self::URI_NOT_EXISTED_ITEM);
		$I->SeeResponseCodeIs(HttpCode::NOT_FOUND);
	}
	
	public function createSuccess(FunctionalTester $I) {
		$I->auth(AccountEnum::ADMIN);
		$body = [
			'service_id' => '2',
			'title' => 'qwertyuiop',
			'fields' => [
				'amount' => 500,
				'account' => '7777416301',
			],
		];
		$I->sendPOST(self::URI, $body);
		$I->SeeResponseCodeIs(HttpCode::CREATED);
	}
	
	public function createFailNotExistsField(FunctionalTester $I) {
		$I->auth(AccountEnum::ADMIN);
		$body = [
			'service_id' => '2',
			'title' => 'qwertyuiop',
			'fields' => [
				'amountyyy' => 100,
				'accounttyyy' => '1234567890',
			],
		];
		$I->sendPOST(self::URI, $body);
		$I->seeUnprocessableEntity([
			[
				"field" => "account",
				"message" => "Заполните поле",
			],
			[
				"field" => "amount",
				"message" => "Заполните поле",
			],
		]);
	}
	
	public function createFailEmptyServiceId(FunctionalTester $I) {
		$I->auth(AccountEnum::ADMIN);
		$body = [
			'service_id' => '',
			'title' => 'qwertyuiop',
			'fields' => [
				'amount' => 100,
				'account' => '1234567890',
			],
		];
		$I->sendPOST(self::URI, $body);
		$I->seeUnprocessableEntity([
			[
				'field' => 'service_id',
				'message' => 'Service Id cannot be blank.',
			],
		]);
	}
	
	public function updateNotExisted(FunctionalTester $I) {
		$I->auth(AccountEnum::ADMIN);
		$I->sendPUT(self::URI_NOT_EXISTED_ITEM, []);
		$I->seeResponseCodeIs(HttpCode::NOT_FOUND);
	}
	
	public function deleteSuccess(FunctionalTester $I) {
		$I->auth(AccountEnum::ADMIN);
		$I->sendDELETE(self::URI_EXISTED_ITEM);
		$I->SeeResponseCodeIs(HttpCode::NO_CONTENT);
	}
	
	public function deleteNotExisted(FunctionalTester $I) {
		$I->auth(AccountEnum::ADMIN);
		$I->sendDELETE(self::URI_NOT_EXISTED_ITEM);
		$I->SeeResponseCodeIs(HttpCode::NOT_FOUND);
	}
	
	public function checkAuthFail(FunctionalTester $I) {
		$I->sendGET(self::URI_EXISTED_ITEM);
		$I->seeResponseCodeIs(HttpCode::UNAUTHORIZED);
		
		$I->sendDELETE(self::URI_EXISTED_ITEM);
		$I->seeResponseCodeIs(HttpCode::UNAUTHORIZED);
		
		$I->sendPUT(self::URI_EXISTED_ITEM, []);
		$I->seeResponseCodeIs(HttpCode::UNAUTHORIZED);
		
		$I->sendPOST(self::URI, []);
		$I->seeResponseCodeIs(HttpCode::UNAUTHORIZED);
		
		$I->sendGET(self::URI, []);
		$I->seeResponseCodeIs(HttpCode::UNAUTHORIZED);
	}
	
	public function checkAuthNoneSelf(FunctionalTester $I) {
		$I->auth(AccountEnum::USER);
		
		$I->sendGET(self::URI_EXISTED_ITEM);
		$I->seeResponseCodeIs(HttpCode::NOT_FOUND);
		
		$I->sendDELETE(self::URI_EXISTED_ITEM);
		$I->seeResponseCodeIs(HttpCode::NOT_FOUND);
		
		$I->sendPUT(self::URI_EXISTED_ITEM, []);
		$I->seeResponseCodeIs(HttpCode::NOT_FOUND);
	}
	
}
