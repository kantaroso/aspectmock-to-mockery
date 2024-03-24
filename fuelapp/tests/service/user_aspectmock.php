<?php
namespace tests;

use PHPUnit\Framework\TestCase;

class Test_User_Aspectmock extends TestCase
{
	public function test_get_success()
	{
		$now = date("Y/m/d H:i:s");
		$model[1] = new \model\User([
			'username' => 'testuser1',
			'password' => 'password1',
			'email' => 'testuser1@example.com',
			'full_name' => 'Test User One',
			'created_at' => $now,
			'update_at' => $now,
		]);
		$model[1]->id = 1;
		$model[2] = new \model\User([
			'username' => 'testuser2',
			'password' => 'password2',
			'email' => 'testuser2@example.com',
			'full_name' => 'Test User Two',
			'created_at' => $now,
			'update_at' => $now,
		]);
		$model[2]->id = 2;
		\AspectMock\Test::double('\model\User', [
			'find' => function ($id) use ($model) {
				return $model[$id] ?? null;
			}
		]);

		$user = new \service\User();
		$res = $user->get(1);
		$this->assertEquals(1, $res->get_id());
		$this->assertEquals('Test User One', $res->get_full_name());
		$res = $user->get(2);
		$this->assertEquals(2, $res->get_id());
		$this->assertEquals('Test User Two', $res->get_full_name());
	}
}
