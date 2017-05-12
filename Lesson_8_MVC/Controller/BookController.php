<?php

namespace Controller;

use Library\Controller;
use Model\BookRepository;

class BookController extends Controller
{
	public function indexAction()
	{
		$model = $this->get('repository')->getRepository('Book');
		$books = $model->findALL();

		$author = 'King';

		$data = [
			'author' => $author, 
			'books' => $books
		];

		return $this->render('index.phtml', $data);
	}

	public function showAction()
	{
		
	}

	public function editAction()
	{
		
	}

}