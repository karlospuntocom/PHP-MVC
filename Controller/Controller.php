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
		if (!isset($_GET['new']) && !isset($_GET['order'])) {
			$orders = $this->model->getOrderList();
			include 'view/orderList.php';
		} elseif (!isset($_GET['new']) && isset($_GET['order'])) {
			$order = $this->model->getOrder($_GET['order']);			
			include 'view/viewOrder.php';
		} elseif (isset($_GET['new']) && isset($_GET['order'])) {
			$order = $this->model->getOrder($_GET['order']);			
			include 'view/modifyOrder.php';
		} elseif (isset($_GET['new']) && !isset($_GET['order'])) {
			$order = $this->model->getOrder($_GET['order']);			
			include 'view/createOrder.php';
		}
		
	}
}

?>