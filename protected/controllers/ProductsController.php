<?php

class ProductsController extends Controller
{
	public $layout = 'main';
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}
	
	public function actionHydraulic()
	{
	
		$this->render('hydraulic');
	}
	
	public function actionSuperbraid()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('superbraid');
	}
	
	public function actionSmooth()
	{
		
		$this->render('smooth');
	}
	
	public function actionThermoplastic()
	{
		
		$this->render('thermoplastic');
	}
}