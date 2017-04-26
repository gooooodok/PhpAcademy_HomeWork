<?php

class DefaultController extends Controller
{
	public function indexAction()
	{
		return $this->render('index.phtml');
	}
	public function feedbackAction()
	{
		return $this->render('feedback.phtml');
	}
}
