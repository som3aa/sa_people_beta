<?php namespace Backend;
use Controller, View;

class DashController extends BaseController {

	/**
	 * Main Dashboard View
	 * @return View
	 */
	public function getIndex() 
	{
		return View::make('Backend.dashboard');
	}

}