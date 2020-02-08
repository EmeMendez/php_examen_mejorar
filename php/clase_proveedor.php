
<?php
     
  

     class Proveedor
    {
          $IDnacional=$_POST['IDnacional'];
          $nombre=$_POST['nombre'];
          $direccion=$_POST['direccion'];
          $telefono=$_POST['telefono'];
          $email=$_POST['email'];
          $contacto=$_POST['contacto'];  

         function __Proveedor($IDnacional,$nombre,$direccion,$telefono,$email,$contacto) {
            $this->IDnacional=$IDnacional;
            $this->nombre=$nombre;
            $this->direccion=$direccion;
            $this->telefono=$telefono;
            $this->email=$email;
            $this->contacto=$contacto;
        }
       
        public function getIDnacional() {
            return $this->idnacional;
        }
        public function setIDnacional( $IDnacional ) {
            $this->$IDnacional = $IDnacional;
        }
        public function getnombre() {
            return $this->nombre;
        }
        public function setnombre( $nombre ) {
            $this->$nombre = $nombre;
        }
        public function getdireccion() {
        return $this->direccion;
        }
        public function setdireccion( $direccion ) {
        $this->direccion = $direccion;
        }
        public function gettelefono() {
        return $this->telefono
        }
        public function settelefono( $telefono ) {
        $this->telefono = $telefono;
        }
        public function getemail() {
        return $this->email;
        }
        public function setemail( $email ) {
        $this->email = $email;
        }
        public function getcontacto() {
        return $this->contacto;
        }
        public function setcontacto( $contacto ) {
        $this->$contacto = $contato;
        }   




}
?>
