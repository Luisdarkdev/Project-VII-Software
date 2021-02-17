<?php

    class sql_class{
        private $bd;

        public function __construct() {
            $this -> bd = new mysqli(SERVIDOR, USUARIO, CLAVE, BDD);
            $this -> bd -> set_charset('utf8');
        }

        #Funcion agregar USUARIOS
        public function AgregarUsuarios($usu_usu, $nom_usu, $cor_usu, $con_usu){
            $resultado = $this->bd->query("INSERT INTO usuario (usuarioUsuario, nombreUsuario, correoUsuario, contrasenaUsuario) VALUES ('$usu_usu', '$nom_usu', '$cor_usu', '$con_usu')");
            return true;
        }
        
        #Funcion consultar USUARIOS
        public function ConsultarUsuarios(){
            $resultado = $this->bd->query("SELECT * FROM usuario");
            return $resultado;
        }
        #Funcion editar USUARIOS
        #Funcion eliminar UUSARIOS


        #Funcion agregar CLIENTES
        //modificar variables con la de la tabla de la BBDD
        public function InsertarClientes($ced1, $ape1, $nom1, $dir1, $tel1 ){
            $resultado = $this->bd->query("INSERT INTO clientes (cedula, apellidos, nombres, direccion, telefono) VALUES ('$ced1', '$ape1', '$nom1', '$dir1', '$tel1')");
            return true;
        }
        #Funcion consultar CLIENTES
          //modificar variables con la de la tabla de la BBDD

        public function ConsultaClienteGeneral(){
            $resultado = $this->bd->query("SELECT * FROM clientes");
            return $resultado;
        }
        #Funcion editar CLIENTES
        #Funcion eliminar CLIENTES
    }

?>
