<?php 

	class producto{

		$codigo_producto;
		$descripcion;
		$precio_unitario;


	function __producto($codigo_producto,$descripcion,$precio_unitario)
	{
		$this->codigo_producto=$codigo_producto; 
      	$this->descripcion=$descripcion;
      	$this->precio_unitario=$precio_unitario;

	}

	public function getcodigo_producto() {
            return $this->codigo_producto;
        }
        public function setcodigo_producto( $codigo_producto ) {
            $this->codigo_producto = $codigo_producto;
        }
        public function getdescripcion() {
            return $this->descripcion;
        }
        public function setproveedor( $descripcion ) {
            $this->descripcion = $descripcion;
        }
         public function getprecio_unitario() {
            return $this->precio_unitario;
        }
        public function setproveedor( $precio_unitario ) {
            $this->precio_unitario = $precio_unitario;
        }
	}


 ?>