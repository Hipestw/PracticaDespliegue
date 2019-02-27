<?php 
$conexion;
$conexion = new mysqli("localhost", "root", "", "script");
    
$nombre = $_POST['nombre'];
$comentario = $_POST['comentario'];
$fecha = $_POST['fecha'];
$lenguaje = $_POST['lenguaje'];
if ($nombre == NULL) {
} else {
    $sql = "INSERT INTO comentarios (nombre, comentario, fecha, lenguaje) VALUES ('$nombre', '$comentario', '$fecha','$lenguaje')";
    $result = $conexion->query($sql);
}
if ($_POST['lenguaje'] == 'PaginaPhp.php') {
    
    $sql = "select * from comentarios where lenguaje='PaginaPhp.php'";
    $result = $conexion->query($sql);
    $comentarios = array();
    while ($row = $result->fetch_assoc()) {
        $comentarios[] = $row;
    }
    foreach ($comentarios as $valor){
        echo "Nombre: " . $valor['nombre'] . " // Comentario: " . $valor['comentario'] . "<br/>";   
    }
} else if ($_POST['lenguaje'] == 'PaginaJavascript.php') {
    $sql = "select * from comentarios where lenguaje='PaginaJavascript.php'";
    $result = $conexion->query($sql);
    $comentarios = array();
    while ($row = $result->fetch_assoc()) {
        $comentarios[] = $row;
    }
    foreach ($comentarios as $valor){
        echo "Nombre: " . $valor['nombre'] . " y su  comentario ha sido: " . $valor['comentario'] . "<br/>";   
    }
} 
?>
