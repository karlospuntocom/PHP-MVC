<?php

class OrdenServicio
{
	public $id;
	public $idCliente;
	public $fechaHora;
	public $descripcion;
	public $cantidadProductos;
	public $costoTotal;
	
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