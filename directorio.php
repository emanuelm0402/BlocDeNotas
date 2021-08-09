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
<center><h1 style="color: brown;">Directorio de archivos</h1></center>

    <?php 
        $listar = null;
        $directorio = opendir("archivos/");

        while ($elemento = readdir($directorio))
        {
            if ($elemento != '.' && $elemento != '..')
            if (is_dir("archivos/".$elemento))
            {
                $listar .= "<li><a href='archivos/$elemento' target='_blank'>$elemento</a></li>";
            }
            else   
            { 
            $listar .= "<li><a href='archivos/$elemento' target='_blank'>$elemento</a></li>";
            }

        }
    
    ?>
<div  class="directorio">
<ul style="padding-left: 32px;padding-right: 32px; margin-left: 46%">
    <?php echo "$listar"  ?>
</ul>
</div>
<center><a href="index.html"><button style="display: inline-block; border-radius: 8px; padding: 10px 20px; background-color: brown; color: white; font-size: medium; font-weight: bold; transition: all 0.2s; cursor: pointer;" id="btn-volver"type="button">Inicio</button></a>
<a href="ver.html"><button style="display: inline-block; border-radius: 8px;padding: 10px 20px; background-color: grey;color: brown; font-size: medium; font-weight: bold; cursor: pointer;" id="btn-volver" type="button">Buscar archivos</button></a></center>
</body>
</html>