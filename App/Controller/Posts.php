<?php

namespace App\Controller;

use \Core\View;
use App\Model\Post;

/*

	POSTS CONTROLLER

*/

class Posts extends \Core\Controller
{
	//Show the index page
	//@return void

	public function indexAction()
	{
		// echo 'Hello from the index action in the Posts controller';
		// echo '<p>Query string parameters: <pre>'.htmlspecialchars(print_r($_GET, true)).'</pre></p>';
		$posts = Post::getAll();
		View::renderTemplate('Posts/index.html', ['posts' => $posts]);
	}

	//Show the add new page
	//@return void

	public function addNewAction()
	{
		echo 'Hello from the addNew action in the Posts controller';
	}

	public function editAction()
	{
		echo 'Hello from the edit action in the Posts controller!';
		echo '<p>Route parameters: <pre>'.htmlspecialchars(print_r($this->route_params,true)).'</pre></p>';
	}
}