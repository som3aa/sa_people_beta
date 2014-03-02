<?php
use Mr2all\Helpers\Check;

class CheckTest extends TestCase {

	/**
	 * test checking process
	 *
	 * @return void
	 */
	public function testCurrentRouteMatchs()
	{
		$checker = new Check('Backend\DashController@getIndex');

		$this->assertTrue($checker->isActive('dash'));
		$this->assertTrue($checker->isActive('dash.index'));

		$this->assertFalse($checker->isActive('dash.create'));
		$this->assertFalse($checker->isActive('pages'));

		// another route action
		$checker2 = new Check('Backend\PagesController@getCreate');

		$this->assertTrue($checker2->isActive('pages'));
		$this->assertTrue($checker2->isActive('pages.create'));
		$this->assertFalse($checker2->isActive('pages.index'));

	}

	/**
	 * test return values if the check passes
	 *
	 * @return void
	 */
	public function testReturneifCheckPasses()
	{
		$checker = new Check('Backend\DashController@getIndex');

		//return string
		$result = $checker->isActive('dash.index','active');

		$this->assertEquals($result,'active');

		//return boolen
		$result = $checker->isActive('dash',false);

		$this->assertFalse($result);

	}

	/**
	 * test return values if the check fails
	 *
	 * @return void
	 */
	public function testReturneValueIfCheckFails()
	{
		$checker = new Check('Backend\DashController@getIndex');

		$result = $checker->isActive('pages','active');

		$this->assertEquals($result, null);

	}
}