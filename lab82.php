<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laboratorio 8.2</title>
</head>
<body>
   <?php
        include ("class_lib.php");
        $fac;
        $valor;
        if(array_key_exists('enviar', $_POST)){
            $fac=new factoriar($_REQUEST['valor']);
            $fac->calcular();
        }
        else{
    ?>
        <form action="lab82.php" method="post">
            Ingrese el numero <input type="text" name="valor" value="">
            <input type="submit" name="enviar" value="enviar dato">
        </form>
    <?php
        }
    ?>

</body>
</html> 