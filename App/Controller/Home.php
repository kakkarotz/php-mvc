<?php

namespace App\Controller;

use \Core\View;

/*

	HOME CONTROLLER

*/

class Home extends \Core\Controller
{

	/*
		Before filter

		@return void
	*/

	protected function before()
	{
		//echo "(before)";
		//return false //originally called method won't be executed on doing this
	}

	/*
		After filter

		@return void
	*/

	protected function after()
	{
		//echo "(action)";
	}


	//Show the index page
	//@return void

	public function indexAction()
	{
		//echo 'Hello from the index action in the Home Controller!';
		// View::render('Home/index.php',[
		// 	'name'    => 'Dave',
		// 	'colours' => ['red','green','blue']
		// ]);
		View::renderTemplate('Home/index.html',[
			'name'    => 'Dave',
			'colours' => ['red','green','blue']
		]);
	}
}