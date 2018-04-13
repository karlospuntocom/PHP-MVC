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
			include 'view/orderList.php';
		} else {
			$order = $this->model->getOrder($_GET['order']);
			include 'view/viewOrder.php';
		}
		
	}
}

?>