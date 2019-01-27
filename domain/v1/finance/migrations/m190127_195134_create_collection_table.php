<?php

use yii2lab\db\domain\db\MigrationCreateTable as Migration;

/**
* Handles the creation of table `collection`.
*/
class m190127_195134_create_collection_table extends Migration
{
	public $table = '{{%finance_collection}}';

	/**
	 * @inheritdoc
	 */
	public function getColumns()
	{
		return [
            'id' => $this->primaryKey(),
            'desc' => $this->text(),
            'color' => $this->text(),
            'brand_country' => $this->text(),
            'made_in' => $this->text(),
            'collection' => $this->text(),
            'composition' => $this->text(),
            'collection_type' => $this->text(),
            'size' => $this->text(),
            'price' => $this->text(),
            'image' => $this->text(),
		];

	}
	public function afterCreate()
	{
		
	}

}
