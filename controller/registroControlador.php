<?PHP

    class CtrlRe{

         public function showValues(){

                //Pregunte Si existe una variable de nombre "name"
                if(isset($_POST['name']) && isset($_POST['apellido'] )
                && isset($_POST['email']) && isset($_POST['password'])
                && isset($_POST['password2']))
                {
                    if($_POST['password']!=$_POST['password2'])
                        echo "Las contraseñas no coinciden";
                    else{
                        echo "<h4>Registro Exitoso</h4>"; 
                        
                            //Si el registro fue exitoso entonces->
                            $tabla="usersvip";
                            //Se creo un array con los datos que se recibieron del formulador
                            $datos=array("nombre"=>$_POST['name'],
                                        "apellido"=>$_POST['apellido'],
                                        "email"=>$_POST['email'],
                                        "password"=>$_POST['password']);

                            //Creo la varibale con la respuesta y llamo al metodo del modelo
                            $respuesta=modeloFormulario::mdlRegistro($tabla,$datos);

                            //Regreso la respuesta
                            return $respuesta;

                    }                     
                }
                else{
                    echo "No recibio el dato";
                }
        }

    }
?>

<script>

</script>
