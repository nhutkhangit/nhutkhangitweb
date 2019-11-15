<?php

use yii\db\Migration;

/**
 * Class m190600_000300_update_table_role
 */
class m190600_000300_add_master extends Migration{

	public function up(){
		$this->insert('{{%role}}', [
			'id'      => 1,
			'name'    => 'Admin',
			'status'  => 10,
			'primary' => 10
		]);
		$this->insert('{{%role}}', [
			'id'      => 2,
			'name'    => 'Member',
			'status'  => 10,
			'primary' => 10
		]);
		$this->insert('{{%user_role}}', [
			'role_id' => 1,
			'user_id' => 1,
		]);
	}

	public function down(){
		return TRUE;
	}
}
