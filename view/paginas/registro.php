<!--ESTILOOOOO-->
    <style>

        .lb{
            border: 1px solid #0D3E65;
            background: #9CCBF1;
            color:#0D3E65;
            padding: 2px;
        }
        

        .container{
            width: 400px;                     
            margin: auto;
            border: solid 3px #C39D95;          
            display: block;
           justify-content: center;
           text-align: center;
           margin-top: 20px;
           padding: 5px 10px 10px 10px;
           border-radius:10px;
        }

        .container form{

            text-align: center;            
            display: block;
        }
        
        .container label{
            display: block;
            font-size: 125%;
        }
        .container input{
            border-radius: 6px;
            padding: 5px;
            font-size: 110%;
        }

        .container button{
            display: block;
            border: none;   
            font-size: 25px;
            padding: 6px;
            margin: 25px 25px 10px 25px;
            background: #CE9184;
            color:white;
        }
        .container button:hover{
            
            background:white ;
            color:#CE9184;
        }

       
        
    </style>

<!--ESTILOOOOO-->

<div class="container">

    <h3>Sign in</h3>
    <form action="#" class="form" method="POST">
        <label for="" >Nombre</label>    
        <input type="text" name="name">
        <label for="">Apellido</label>    
        <input type="text" name="apellido">
        <label for="">Correo</label>    
        <input  type="email" name="email">
        <label  for="">Password</label>    
        <input  type="password" name="password">
        <label  for="">Confirme su contraseña</label>
        <input  type="password" name="password2">
        <button  type="submit">Enviar</button>
    </form>
    <?PHP

    //$registro = CtrlRe::showValues();
    $registro = new CtrlRe;
    $registro->showValues();

    ?>        
    
</div>
