<?php

namespace Library;

abstract class Controller
{
	public function render($view, array $args = [])
	{
		extract($args);		
		$dir = str_replace(['\\', 'Controller'], '', get_class($this));

		$file = VIEW_DIR . $dir . DS . $view;

		if (!file_exists($file)) {
			throw new Exception("{$file} not found");
		}

		ob_start();
		require $file;
		return ob_get_clean();		
	}
}