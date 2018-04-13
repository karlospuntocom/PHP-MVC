<?php
include("OrdenServicio.php");
require('Model/includes.php');

class Model {
	public function getOrderList()
	{
		$db = DataBase::singleton();
		$consulta = $db->executeQue("select * from ordenservicio");
		$total = $db->numRows($consulta);
		$orders = null;
		if ($total > 0) {
			while ($row = $db->arrayResult($consulta)) {
				$orders[] = array(
					'id' => $row['id'],
					'idCliente' => $row['idCliente'],
					'fechaHora' => $row['fechaHora'],
					'descripcion' => $row['descripcion'],
					'cantidadProductos' => $row['cantidadProductos'],
					'costoTotal' => $row['costoTotal']
				);
				}
			}
		return $orders;
	}

	public function getOrder($order)
	{
		$db = DataBase::singleton();
		$order = $_GET["order"];
		// $config = Config::singleton();
		$consulta = $db->executeQue("select * from ordenservicio where id =".$order);
		$total = $db->numRows($consulta);
		if ($total > 0) {
			while ($row = $db->arrayResult($consulta)) {
				$allOrders = array(
					'id' => $row['id'],
					'idCliente' => $row['idCliente'],
					'fechaHora' => $row['fechaHora'],
					'descripcion' => $row['descripcion'],
					'cantidadProductos' => $row['cantidadProductos'],
					'costoTotal' => $row['costoTotal']
				);
			}
		}

		return $allOrders;
		
	}
}

?>