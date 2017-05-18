<?php

namespace Library;

class RepositoryManager
{
	use PdoAwareTrait;

	private $repositories = [];

	public function getRepository($entityName)
	{
		//var_dump($this->pdo);
		if (isset($this->repositories[$entityName])) {
			return $this->repositories[$entityName];
		}

		$repoClassName = "\\Model\\{$entityName}Repository";
		$repo = (new $repoClassName())->setPdo($this->pdo);

		$this->repositories[$entityName] = $repo;

		return $repo;
	}
}