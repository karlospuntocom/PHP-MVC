<?php

class Notificacion
{
	public $id;
	public $idUsuarioOrigen;
	public $idUsuarioDestino;
	public $fechaHora;
	public $descripcion;
	
	public function __construct($id, $idUsuarioOrigen, $idUsuarioDestino, $fechaHora, $descripcion)
	{
		$this->id = $id;
		$this->idUsuarioOrigen = $idUsuarioOrigen;
		$this->idUsuarioDestino = $idUsuarioDestino;
		$this->fechaHora = $fechaHora;
		$this->descripcion = $descripcion;
	}
}
?>