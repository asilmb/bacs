<?php

namespace api\v5\tests\functional\bank;

use api\tests\functional\enums\AccountEnum;
use api\tests\FunctionalTester;
use Codeception\Util\HttpCode;
use common\fixtures\BankBinsFixture;
use common\fixtures\BankCodeFixture;
use yii2lab\test\RestCest;
use yii2lab\test\Util\HttpHeader;
use yii2lab\test\Util\Type;

class CardCest extends RestCest {
	const URI = 'card';
	const URI_EXISTS_ITEM = 'card/7953';
	const URI_NOT_EXISTS_ITEM = 'card/11111111';
	const URI_APPROVE = 'card/approve';
	const URI_ATTACH = 'card/attach';
	
	const EXISTED_REFERENCE_APPROVED = '170427114625';
	const EXISTED_REFERENCE = '170412144734';
	const NOT_EXISTED_REFERENCE = '170427114627';
	const BAD_REFERENCE = '170427';
	
	public $format = [
		'id' => Type::INTEGER,
		'hb_id' => Type::INTEGER,
		'mask' => Type::STRING,
		'approve' => Type::BOOLEAN,
		'reference' => Type::STRING,
		'bank' => Type::ARR_OR_NULL,
	];
	
	public function _before($I) {
		parent::_before($I);
	}
	
	public function fixtures() {
		$this->loadFixtures([
			BankBinsFixture::class,
			BankCodeFixture::class,
		]);
	}
	
	public function getList(FunctionalTester $I) {
		$I->auth(AccountEnum::ADMIN);
		$I->sendGET(self::URI);
		$I->SeeResponseCodeIs(HttpCode::OK);
		$I->seeResponseMatchesJsonType($this->format);
	}
	
	public function getListSortById(FunctionalTester $I) {
		$I->auth(AccountEnum::ADMIN);
		$I->sendGET(self::URI, [
			'sort' => '-id',
		]);
		$I->SeeResponseCodeIs(HttpCode::OK);
		$I->seeResponseMatchesJsonType($this->format);
		$I->seeSort(7955, 7953, 'id');
	}
	
	public function getListFilterByApprove(FunctionalTester $I) {
		$I->auth(AccountEnum::ADMIN);
		$I->sendGET(self::URI, [
			'approve' => '0',
		]);
		$I->SeeResponseCodeIs(HttpCode::OK);
		$I->seeResponseMatchesJsonType($this->format);
		$I->seeSort(7953, 7953, 'id');
	}
	
	public function getListFilterByApprove2(FunctionalTester $I) {
		$I->auth(AccountEnum::ADMIN);
		$I->sendGET(self::URI, [
			'approve' => '1',
		]);
		$I->SeeResponseCodeIs(HttpCode::OK);
		$I->seeResponseMatchesJsonType($this->format);
		$I->seeSort(7955, 7955, 'id');
	}
	
	public function getDetails(FunctionalTester $I) {
		$I->auth(AccountEnum::ADMIN);
		$I->sendGET(self::URI_EXISTS_ITEM);
		$I->SeeResponseCodeIs(HttpCode::OK);
		$I->seeResponseMatchesJsonType($this->format);
	}
	
	public function getDetailsNotExists(FunctionalTester $I) {
		$I->auth(AccountEnum::ADMIN);
		$I->sendGET(self::URI_NOT_EXISTS_ITEM);
		$I->SeeResponseCodeIs(HttpCode::NOT_FOUND);
	}
	
	public function getDetailsNotAllowed(FunctionalTester $I) {
		$I->auth(AccountEnum::USER);
		$I->sendGET(self::URI_EXISTS_ITEM);
		$I->seeResponseCodeIs(HttpCode::NOT_FOUND);
	}
	
	public function delete(FunctionalTester $I) {
		$I->auth(AccountEnum::ADMIN);
		$I->sendDELETE(self::URI_EXISTS_ITEM);
		$I->seeResponseCodeIs(HttpCode::NO_CONTENT);
	}
	
	public function deleteNotAllowed(FunctionalTester $I) {
		$I->auth(AccountEnum::USER);
		$I->sendDELETE(self::URI_EXISTS_ITEM);
		$I->seeResponseCodeIs(HttpCode::NOT_FOUND);
	}
	
	public function approveSuccess(FunctionalTester $I) {
		$I->auth(AccountEnum::ADMIN);
		$body = [
			'reference' => self::EXISTED_REFERENCE,
			'amount' => '10.77',
		];
		$I->sendPUT(self::URI_APPROVE, $body);
		$I->seeResponseCodeIs(HttpCode::NO_CONTENT);
	}
	
	public function approveAlreadyApproved(FunctionalTester $I) {
		$I->auth(AccountEnum::ADMIN);
		$body = [
			'reference' => self::EXISTED_REFERENCE_APPROVED,
			'amount' => '10.77',
		];
		
		$I->sendPUT(self::URI_APPROVE, $body);
		$I->seeUnprocessableEntity([
			[
				"field" => "reference",
				"message" => 'card_already_approved',
			],
		]);
	}
	
	public function approveNotFoundCard(FunctionalTester $I) {
		$I->auth(AccountEnum::ADMIN);
		$body = [
			'reference' => self::NOT_EXISTED_REFERENCE,
			'amount' => '10.77',
		];
		
		$I->sendPUT(self::URI_APPROVE, $body);
		$I->seeUnprocessableEntity([
			[
				"field" => "reference",
				"message" => 'card_not_found',
			],
		]);
	}
	
	public function approveNotValid(FunctionalTester $I) {
		$I->auth(AccountEnum::ADMIN);
		$body = [
			'reference' => self::BAD_REFERENCE,
			'amount' => '10',
		];
		
		$I->sendPUT(self::URI_APPROVE, $body);
		$I->seeUnprocessableEntity([
			[
				"field" => "amount",
				"message" => 'valid_float',
			],
			[
				"field" => "reference",
				"message" => 'Reference must be no less than 1000000.',
			],
		]);
	}
	
	public function attach(FunctionalTester $I) {
		return; // todo: uncommented if fixed
		$I->auth(AccountEnum::ADMIN);
		$body = [
			'link' => 1,
		];
		$I->sendGET(self::URI_ATTACH, $body);
		$I->seeResponseCodeIs(HttpCode::OK);
		$I->seeHttpHeader(HttpHeader::CONTENT_TYPE, 'text/html; charset=UTF-8');
		$response = $I->grabResponse();
		expect($response)->regExp('/linkingForm/');
	}
	
}
