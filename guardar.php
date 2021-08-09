<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="styles.css" rel="stylesheet">
      <title>Block de notas</title>  
</head>
<body style="background-image:url('images.jpg'); background-size: cover;">
<center>

      <?php  

      $Nombre = $_POST['nombre'];
      $Texto = $_POST['texto'];

      $ruta = "archivos/$Nombre.txt";

      $archivos = fopen($ruta,'w');

      fwrite($archivos, 
            "Nombre: ".$Nombre.
            " Texto: ".$Texto);

            echo "<strong><h1 style='color: brown;'>Archivo guardado con excito</h1> <br><br> \"$Nombre.txt\"</strong><br>";
            echo "Puedes verlo en la lista de Notas";
      fclose($archivos); 

      ?> 
</body>
<footer>
<br> 
<br>
<a href="index.html"><button style="display: inline-block; border-radius: 8px; padding: 10px 20px; background-color: brown;color: white; font-size: medium; font-weight: bold; transition: all 0.2s; cursor: pointer;" id="btn-crear" type="button">Nuevo Archivo</button></a>
<a href="ver.html"><button style="display: inline-block; border-radius: 8px;padding: 10px 20px; background-color: grey;color: brown; font-size: medium; font-weight: bold; cursor: pointer;" id="btn-volver" type="button">Ver Archivos</button></a>
</center>
</footer>
</html>



