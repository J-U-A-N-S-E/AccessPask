<?php include("../formatos/cerrse.php");          ?>

<!DOCTYPE html>
<html lang="es">
<head>


<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Pask</title>
    <link rel="icon" type="img" href="../img/pask.png" size="any">
    <link rel="stylesheet" href="../stylos/EST.css">
  
</head>

<body>
<header class="cuadro_texto">
        <img src="../img/pask.png" alt="logo accespask">
        

    <ul>

        <li><a href="../vistas/excusa.html">Excusa</a></li>
        <li><a href="../modelo/cerrar_sesion.php" img src="../img/salir.png">Salir</a> </li>
        
        
    </ul>
    </header>
    <main>

    <?php
        $host="localhost";
        $user="root";
        $pass="";
        $bd="accesspask";
        $con=mysqli_connect($host,$user,$pass);
        mysqli_select_db($con,$bd);

        $consulta= "SELECT * FROM usuario where idRol=2";

        $filas=mysqli_query($con, $consulta);

        $produc=$filas; 
        ?> 

        <div class="nom">
            LISTA DE MAESTROS
        </div>
    <table >
        <thead>
        <tr >
            <th >Nombre</th>
            <th> Apellido</th>
           
        </tr>
        </thead>
        <tbody>
        <?php foreach ($produc as $dato) {?>

        <tr>   
        <td> <?php echo  $dato['Nombre'] ." ". $dato['Apellido'] ; ?> </td>

        <?php } ?>
        </tbody>
    </table>
  

        </main>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>