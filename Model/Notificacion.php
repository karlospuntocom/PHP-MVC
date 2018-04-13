<?php

class Notificacion
{
	private $id;
	private $idUsuarioOrigen;
	private $idUsuarioDestino;
	private $fechaHora;
	private $descripcion;
	
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