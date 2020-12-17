<?PHP

    class conexionDB{

        #PDO ; ("nombre del servidor; nombre de la base de datos","usuario","contraseña)

        static public function dataBase(){ 

            $conex = new PDO("mysql:host=localhost;dbname=mybase","root","");
            $conex->exec("set names utf8");
            
            return $conex; 

        }


    }

?>
