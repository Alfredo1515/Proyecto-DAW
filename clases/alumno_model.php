<?php
    class Alumno extends DBAbstractModel{

        public $dni;
        public $nombre;
        public $apellidos;
        public $fecha_Nac;
        public $direccion;
        public $correo;
        public $telefono;
        public $estudios;
        public $estudios_Centro;

        function __construct(){
            $this ->db_name = 'bd_ex';
        }

        public function get($id=''){
            if($id != ''){
                $this->query = "
                SELECT dni, nombre, apellidos, fecha_Nac, direccion, correo, telefono, estudios, estudios_centro
                FROM  bolsa_alumnos
                WHERE id = '$dni'
                ";
                $this->get_results_from_query();

            }else{
                $this->query = "
                SELECT dni, nombre, apellidos, fecha_Nac, direccion, correo, telefono, estudios, estudios_centro
                FROM bolsa_alumnos";
                $this->get_results_from_query();
            }

            if(count($this->rows) == 1){
                foreach($this->rows[0] as $propiedad=>$valor){
                    $this->$propiedad = $valor;
                }
            }
        }

        public function set($data=array()){
            foreach($data as $campo=>$valor){
                $$campo = $valor;
            }

           $alumno = new Alumno();
           $alumno->get($dni);
           $datos = $alumno->get_rows();
        }

        public function edit($data = array()){
            
        }

        public function delete($id = ''){

        }

        function __destruct(){
            //unset($this);
        }


    }
?>