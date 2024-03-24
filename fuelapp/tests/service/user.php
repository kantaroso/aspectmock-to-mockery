<?php
namespace tests;

use PHPUnit\Framework\TestCase;

class Test_User extends TestCase
{
	public function test_get_success()
	{
		$user = new \service\User();
		$res = $user->get(1);
		$this->assertNotNull($res);
		$this->assertEquals(1, $res->get_id());
		$this->assertEquals('Test User One', $res->get_full_name());
	}

	public function test_get_notfound()
	{
		$user = new \service\User();
		$res = $user->get(1);
		$this->assertNotNull($res);
	}
}
