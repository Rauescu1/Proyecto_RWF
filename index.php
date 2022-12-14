<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RWF Inicio</title>
    <link rel="stylesheet" href="./css/styles.css">

</head>
<body>
<!-- Cabecera -->
<header>
    <?php include './componentes/header.php' ?>
</header>    
<!-- Contenido principal de la pagina -->
<main>
    <div>
        <img src="./src/index/bandera.png" class="bandera">
        <p class="ruta">Inicio</p>
    </div>
    
    <div class="submenu">
        <!-- formularios de submenu para realizar el include en cada caso -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="botones">
            <input id='b1' class="boton" type="submit" name='boton' value='DESTACADOS'>
            <input id='b2' class="boton" type="submit" name='boton2' value='SOBRE NOSOTROS'>
            
        
        </form>

        <!-- submenu -->
        <?php 
           
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(isset($_POST['boton']))
                {
                    include './componentes/subdestacados.php';
                    echo "
                    <style>
                    #b1{
                        color:rgba(0, 86, 165, 1);
                    }
                    </style>
                    ";
                }
                else if (isset($_POST['boton2']))
                {
                    include './componentes/subnosotros.php';
                    echo "
                    <style>
                    #b2{
                        color:rgba(0, 86, 165, 1);
                    }
                    </style>
                    ";

                }
            }else{
                include './componentes/subdestacados.php';
                echo "
                    <style>
                    #b1{
                        color:rgba(0, 86, 165, 1);
                    }
                    </style>
                    ";
            }
        ?>
    </div>





</main>
<!-- Pie de pagina -->
<footer>
    <?php include './componentes/footer.php' ?>
</footer>

</body>
</html>