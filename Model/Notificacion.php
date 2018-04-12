<?php

class Notificacion
{
	private $id;
	private $idAutorOrigen;
	private $idAutorDestino;
	private $fechaHora;
	private $descripcion;
	
	public function __construct($id, $idAutorOrigen, $idAutorDestino, $fechaHora, $descripcion)
	{
		$this->id = $id;
		$this->idAutorOrigen = $idAutorOrigen;
		$this->idAutorDestino = $idAutorDestino;
		$this->fechaHora = $fechaHora;
		$this->descripcion = $descripcion;
	}
}
?>