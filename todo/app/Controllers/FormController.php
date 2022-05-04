<?php

class FormController
{
	public function index()
	{
		foreach ($_POST as $key => $value) {
			echo $key . ': ' . $value . '<br>';
		}

		require 'core/render.php';
		render([
			'view' => 'form',
			'title' => 'Formular'
		]);
	}
	
	
}

