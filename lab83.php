<html>
    <head>
        <title>Laboratorio 8.3</title></head>
    
    <body>
        <?php
            include("class_lib.php");
            $i=1;
            if(array_key_exists('enviar', $_POST)){
                
                if($_REQUEST['num']!=""){
                    if($_REQUEST['num']>1){
                        $most=new matriz($_REQUEST['num']);
                        $most->mostrar_matriz();
                    }
                    else{
                        echo "Ingrese un Numero mayor a 1!";
                    }
                }   
            }
            else{
            ?>
            <FORM ACTION="lab83.php" METHOD="POST">

                <br><br>Ingrese el tamaño de la matriz : <input type="text" name="num"><br><br>
                <input type="submit" name= "enviar" value="Ingresar">

            </FORM>
        <?php
            }
        ?>
  
    </body>

</html>