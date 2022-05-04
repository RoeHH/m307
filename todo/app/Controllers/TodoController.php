<?php

class TodoController
{
	public function index()
	{
		$pdo = db();
		$TODOS = $pdo->query('SELECT * FROM todo');

		
		require 'app/Views/todo.view.php';
	}
	
	
}

