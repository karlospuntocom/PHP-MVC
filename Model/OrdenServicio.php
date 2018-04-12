<?php

class OrdenServicio
{
	private $id;
	private $idCliente;
	private $fechaHora;
	private $descripcion;
	private $cantidadProductos;
	private $costoTotal;
	
	public function __construct($id, $idCliente, $fechaHora, $descripcion, $cantidadProductos, $costoTotal)
	{
		$this->id = $id;
		$this->idCliente = $idCliente;
		$this->fechaHora = $fechaHora;
		$this->descripcion = $descripcion;
		$this->cantidadProductos = $cantidadProductos;
		$this->costoTotal = $costoTotal;
	}
}
?>