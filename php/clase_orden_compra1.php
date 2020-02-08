<?php
	 class orden_compra 
	 {
	 	$nombre;
		$proveedor;
		$fecha;
		$producto1;
		$producto2;
		$producto3;
	 	$cantidad_p1;
		$cantidad_p2;
		$cantidad_p3;
	 	}

	function __orden_compra1($nombre,$proveedor,$fecha,$producto1,$producto2,$producto3,$cantidad_p1,$cantidad_p2,$cantidad_p3) 
	{
        $this->nombre=$nombre;
        $this->proveedor=$proveedor;
        $this->fecha=$proveedor;
        $this->producto1=$producto1;
        $this->producto2=$producto2;
        $this->producto3=$producto3;
        $this->producto1=$producto1_p1;
        $this->producto2=$producto2_p2;
        $this->producto3=$producto3_p3;

     } 

        public function getnombre() {
            return $this->nombre;
        }
        public function setnombre( $nombre ) {
            $this->nombre = $nombre;
        }
        public function getproveedor() {
            return $this->proveedor;
        }
        public function setproveedor( $proveedor ) {
            $this->proveedor = $proveedor;
        }
        public function getfecha() {
        	return $this->fecha;
        }
        public function setfecha( $fecha ) {
        $this->fecha = $fecha;
        }
       	public function getproducto1() {
        	return $this->producto1;
        }
        public function setproducto1( $producto1 ) {
        	$this->producto1 = $producto1;
        }	
        	public function getproducto2() {
        	return $this->producto2;
        }
        public function setproducto2( $producto2 ) {
        	$this->producto1 = $producto2;
        }	
        public function getproducto3() {
        	return $this->producto3;
        }
        public function setproducto3( $producto3 ) {
        	$this->producto3 = $producto3;
        }	
        public function getproducto1_p1() {
        	return $this->producto1;
        }
        public function setproducto1_p1( $producto1_p1 ) {
        	$this->producto1_p1 = $producto1_p1;
        }	
        	public function getproducto2_p2() {
        	return $this->producto2_p2;
        }
        public function setproducto2_p2( $producto2_p2 ) {
        	$this->producto2_p2 = $producto2_p2;
        }	
        public function getproducto3_p3() {
        	return $this->producto3_p3;
        }
        public function setproducto3_p3( $producto3_p3) {
        	$this->producto3_p3 = $producto3_p3;
        }	
 ?>	