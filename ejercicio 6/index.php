<?php
require_once "libreria/firstLaw.php";
require_once "libreria/secondLaw.php";
require_once "libreria/thirdLaw.php";

$selected = $_GET["law"] ?? "second";  

switch ($selected) {
    case "first":
        $law = new FirstLaw("straight-line motion");
        break;
    case "second":
        $law = new SecondLaw(20.0, 5.0);
        break;
    case "third":
        $law = new ThirdLaw("downward action");
        break;
    default:
        $law = new SecondLaw(10.0, 1.0);  
}

$result = $law->calculate();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newton's Laws Simulator</title>
</head>
<body>
    <h1>Simulator of Newton's Laws</h1>

    <form method="get">
        <label for="law">Choose a law:</label>
        <select name="law" id="law">
            <option value="first" <?= $selected == "first" ? "selected" : "" ?>>1st Law - Inertia</option>
            <option value="second" <?= $selected == "second" ? "selected" : "" ?>>2nd Law - F = m * a</option>
            <option value="third" <?= $selected == "third" ? "selected" : "" ?>>3rd Law - Action/Reaction</option>
        </select>
        <button type="submit">Calculate</button>
    </form>

    <h2>Result:</h2>
    <p><?= $result ?></p>
</body>
</html>
