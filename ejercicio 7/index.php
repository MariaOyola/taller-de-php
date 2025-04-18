<?php
require_once "libreria/LicenciaA.php";
require_once "libreria/LicenciaB.php";
require_once "libreria/LicenciaC.php";

$mensaje = "";
$registros = [];

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["identification"])) {
    $identification = $_POST["identification"];
    $name = $_POST["name"]; 
    $Lastname = $_POST["Lastname"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $rh = $_POST["rh"];
    $type_license = $_POST["licencia"];

    $data = [$identification, $name, $Lastname, $address, $phone, $rh, "Licencia $type_license"];

    switch ($type_license) {
        case "A":
            $licencia = new LicenciaA();
            break;
        case "B":
            $licencia = new LicenciaB();
            break;
        case "C":
            $licencia = new LicenciaC();
            break;
        default:
            $mensaje = "Tipo de licencia inválido.";
            break;
    }

    if (isset($licencia)) {
        $licencia->Register($data);
        $mensaje = "Registro exitoso.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Licencia</title>
</head>
<body>
    <h2>Formulario de Registro de Licencia</h2>

    <?php if ($mensaje): ?>
        <p><strong><?= $mensaje ?></strong></p>
    <?php endif; ?>

    <form method="POST">
        <label for="identification">Identificación:</label><br>
        <input type="text" id="identification" name="identification" required><br><br>

        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="Lastname">Apellido:</label><br>
        <input type="text" id="Lastname" name="Lastname" required><br><br>

        <label for="address">Dirección:</label><br>
        <input type="text" id="address" name="address" required><br><br>

        <label for="phone">Teléfono:</label><br>
        <input type="text" id="phone" name="phone" required><br><br>

        <label for="rh">RH:</label><br>
        <input type="text" id="rh" name="rh" required><br><br>

        <label for="licencia">Tipo de Licencia:</label><br>
        <select id="licencia" name="licencia" required>
            <option value="A">Licencia A</option>
            <option value="B">Licencia B</option>
            <option value="C">Licencia C</option>
        </select><br><br>

        <input type="submit" value="Registrar">
    </form>
</body>
</html>