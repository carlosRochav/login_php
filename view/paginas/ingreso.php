<!--ESTILOOOOO-->
<style>
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
    <form action="#" class="form">
       
        <label for="">Correo</label>    
        <input  type="email">
        <label  for="">Password</label>    
        <input  type="password">        
        <button  type="submit">Ingresar</button>
    </form>
</div>