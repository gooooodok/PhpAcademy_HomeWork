<?php

namespace Library;

class BaseRepository
{
	protected $pdo;

	public function setPdo(\PDO $pod)
	{
		$this->pdo = $pdo;

		return $this;
	}
}