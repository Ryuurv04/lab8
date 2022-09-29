<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 8.1</title>
</head>
<body>
    <?php
        include("class_lib.php");
        $img=new mostrar();
        if(array_key_exists('enviar', $_POST)){
            if($_REQUEST['valor']>=80){
                echo "<img src=".$img->dame_feliz().">";
            }
            else if($_REQUEST['valor']>=50){
                echo "<img src=".$img->dame_serio().">";
            }
            else{
                echo "<img src=".$img->dame_triste().">";
            }   
        }
        else{
    ?>
        <form action="lab81.php" method="post">
            Ingrese el porcentaje de veta <input type="text" name="valor" value="">
            <input type="submit" name="enviar" value="enviar dato">
        </form>
    <?php
    }
    ?>
</body>
</html>