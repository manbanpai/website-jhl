<?php
class LiteratureController extends Controller
{
	public $layout = 'main';
	
	public function actionIndex()
	{
		
		$this->render('index');
	}
}