<?php

namespace MyClasses;

use MyLib\DateTime as MyDateTime;
use DateTime; 

class Test
{
	public $a;
	public $b;
	public $c = 123;

	public function __construct()
	{
		$this->a = new MyDateTime();
		$this->b = new DateTime();
	}
}