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
            $this ->db_name = 'bolsa_trabajo';
        }

        public function get($dni=''){
            if($dni != ''){
                $this->query = "
                SELECT dni, 
                       nombre, 
                       apellidos, 
                       fecha_Nacimiento, 
                       direccion, 
                       correo, 
                       telefono, 
                       estudio_ESO, 
                       estudio_batchiller,
                       estudio_ciclo, 
                       estudio_universidad, 
                       estudios_centro,
                       tipo_usuario,
                       usuario_pass
                FROM  bolsa_alumnos
                WHERE dni = '$dni'
                ";
                $this->get_results_from_query();

            }else{
                $this->query = "
                SELECT dni, 
                       nombre, 
                       apellidos, 
                       fecha_Nacimiento, 
                       direccion, 
                       correo, 
                       telefono, 
                       estudio_ESO, 
                       estudio_batchiller, 
                       estudio_ciclo, 
                       estudio_universidad, 
                       estudios_centro,
                       tipo_usuario,
                       usuario_pass
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

            if(isset($datos['0'])){
                if($datos['0']['dni'] == $dni){
                    $this->error = "DNI Repetido";
                }
            }else{
                $this->query = "
                INSERT INTO bolsa_alumnos
                (dni, 
                 nombre, 
                 apellidos, 
                 fecha_Nacimiento, 
                 direccion, 
                 correo, 
                 telefono, 
                 estudio_ESO,
                 estudio_batchiller,
                 estudio_ciclo,
                 estudio_universidad,
                 estudios_centro,
                 empresa_FCT,
                 tipo_usuario,
                 usuario_pass)
                VALUES
                ('$dni', 
                 '$nombre', 
                 '$apellidos', 
                 '$fecha_Nacimiento', 
                 '$direccion', 
                 '$correo', 
                 '$telefono',
                 '$estudio_ESO',
                 '$estudio_batchiller',
                 '$estudio_ciclo',
                 '$estudio_universidad', 
                 '$estudios_centro', 
                 '$empresa_FCT',
                 '$tipo_usuario',
                 '$usuario_pass')
                ";
                $this->execute_single_query();
                if($this->error==""){
                    $this->msg = $nombre.' '.$apellidos.' agregado exitosamente';
                }
            }

        }

        public function edit($data = array()){
            foreach ($data as $campo=>$valor){
                $$campo = $valor;
            }

            $this->query = "
                UPDATE bolsa_alumnos
                SET dni = '$dni',
                nombre = '$nombre',
                apellidos = '$apellidos',
                fecha_Nacimiento = '$fecha_Nacimiento',
                direccion = '$direccion',
                correo = '$correo',
                telefono = '$telefono',
                estudio_ESO = '$estudio_ESO',
                estudio_batchiller = '$estudio_batchiller',
                estudio_ciclo = '$estudio_ciclo',
                estudio_universidad = '$estudio_universidad',
                estudios_centro = '$estudios_centro',
                estudios_FCT = '$empresa_FCT',
                tipo_usuario = '$tipo_usuario',
                usuario_pass = '$usuario_pass',
                ";

            $this->execute_single_query();
            if($this->error==""){
                $this->msg = $nombre.' '.$apellido.' ha sido modificado exitosamente';
            }
        }

        public function delete($id = ''){
            $this->query = "
            DELETE FROM alumnos
            WHERE id = '$id'
            ";
            $this->execute_single_query();
            if($this->error==""){
                $this->msg = 'Alumno '.$id.' eliminado exitosamente';
            }
        }

        function __destruct(){
            //unset($this);
        }


    }
?>