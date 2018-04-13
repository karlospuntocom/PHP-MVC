<?php
include_once("model/Model.php");
	
class Controller {
	public $model;

	public function __construct()
	{
		$this->model = new Model();
	}

	public function invoke()
	{
		if (!isset($_GET['order'])) {
			$orders = $this->model->getOrderList();
			include 'view/orderlist.php';
		} else {
			$order = $this->model->getOrder($_GET['order']);
			include 'view/vieworder.php';
		}
		
	}
}

?>