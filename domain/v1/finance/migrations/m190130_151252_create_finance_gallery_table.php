<?php

use yii2lab\db\domain\db\MigrationCreateTable as Migration;

/**
* Handles the creation of table `finance_gallery`.
*/
class m190130_151252_create_finance_gallery_table extends Migration
{
	public $table = '{{%finance_gallery}}';

	/**
	 * @inheritdoc
	 */
	public function getColumns()
	{
		return [
			'id' => $this->primaryKey(),
            'title' => $this->text(),
            'desc' => $this->text(),
            'image' => $this->text(),
		];

	}

	public function afterCreate()
	{
		
	}

}
