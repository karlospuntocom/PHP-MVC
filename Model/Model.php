<?php
include_once("model/OrdenServicio.php");

class Model {
	public function getOrderList()
	{
		return array(
			"1" => new OrdenServicio("1", "1030647", "26/11/2008 07:22", "Orden número 1", "32", "170.000"),
			"2" => new OrdenServicio("2", "9411", "16/02/2014 09:54", "Orden número 2", "57", "1.900.000"),
			"3" => new OrdenServicio("3", "1023", "24/01/2000 01:01", "Orden número 3", "11", "10.000")
		);
	}

	public function getOrder($order)
	{
		$allOrders = $this->getOrderList();
		return $allOrders[$order];
	}
}

?>