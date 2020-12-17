<?php
    
    require_once "conexion.php";

    class modeloFormulario{


         static public function mdlRegistro($tabla,$datos)
        {
            # code...
            /*instacion en una varible, el objeto de conexion a la
            base de datos*/
            $stmt=conexionDB::dataBase()->prepare("INSERT INTO $tabla(nombre,apellido,correo,password)
            VALUES(:nombre,:apellido,:correo,:password)");
            /*Usamos bindParam para pasar los datos del array a las variables 
            protegias*/
            
            $stmt->bindParam(":nombre",$datos['nombre'],PDO::PARAM_STR);
            $stmt->bindParam(":apellido",$datos['apellido'],PDO::PARAM_STR);
            $stmt->bindParam(":correo",$datos['email'],PDO::PARAM_STR);
            $stmt->bindParam(":password",$datos['password'],PDO::PARAM_STR);

                if($stmt->execute()){

                    return "ok";
                }
                else {
                    echo 'No se pudo procesar "error" ';
                    print_r(conexionDB::dataBase()->errorInfo());
                }

            
            
        }



    }

?>