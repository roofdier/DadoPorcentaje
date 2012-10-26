<?php
class Dado
{
	private $puntos;
	function __construct()
	{
		srand((double)microtime()*1000000);
	}

	private function tirar(){
		$this->puntos = $randval = rand(1,6);
	}

	public function nuevaTirada(){
		$this->tirar();
		return $this->puntos;
	}
}
?>