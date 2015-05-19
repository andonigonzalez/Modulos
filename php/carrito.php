<?php

class Carrito{

	private $id;
	private $nombre;
	public $cantProductos;
	private $sql;

	function __construct(){
		$obj = new Conexion();
		$this->sql = $obj->getConexion();
		$this->cantProductos = 0;
	}

	public function addItem($idProducto, $nombreProducto){

		$this->id[$this->cantProductos] = $idProducto;

		$this->nombre[$this->cantProductos] = $nombreProducto;

		$this->cantProductos++;

	}

	public function borrarItem($lineaProducto){
		$this->id[$lineaProducto] = 0;
	}

	public function vaciarCarrito(){
		
		unset($this->id);
		unset($this->nombre);
		$this->cantProductos = 0;

	}

	public function mostrarCarrito(){

		for($i = 0; $i < $this->cantProductos; $i++){

			if($this->id[$i] != 0){
				echo "<tr>
							<td>".$this->id[$i]."</td>
							<td>".$this->nombre[$i]."</td>
							<td><a class='btn' onClick='quitarProducto($i)'>X</a></td>
						</tr>";
			}

		}

	}

}

?>