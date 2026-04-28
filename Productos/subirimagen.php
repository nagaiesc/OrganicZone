<?php
$id = $_POST['id'];


    //Define a que carpeta irá el archivo
    $target_dir = "../Imagenes/";
    //recuperar el tipo de archivo (extension)
    $imageFileType = strtolower(pathinfo($_FILES["imagen"]["name"],PATHINFO_EXTENSION));
    //Define el nombre del archivo P-[id del estudiante]-[id de la tarea]
    $newFileName = "P-".$id.".".$imageFileType;
    //ruta comppleta de carpeta+nombre donde se guardara el archivo
    $target_file = $target_dir . $newFileName;
    //variable que funcionara como "bandera" si el valor es 1 se puede subir, si es 0 algo pasó
    $uploadOk = 1;
    echo $target_file;

    // Verificar si el archivo existe
    if (file_exists($target_file)) {
      unlink($target_file);
    }

    // Valida tamaño
    if ($_FILES["imagen"]["size"] > 50000000) {
      echo "Lo sentimos, tu archivo es muy grande.";
      $uploadOk = 0;
    }
    
    //subir archivo
    if ($uploadOk == 0) {
      echo "Ocurrió algun error.";
    } else {
      if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["imagen"]["name"])). " se subió.";
      } else {
        echo "No se pudo subir tu archivo.";
      }
    }

header("Location: leerproducto.php?id=$id");
?>