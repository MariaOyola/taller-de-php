<?php
require_once 'libreria/simple.php';
require_once 'libreria/half.php';
require_once 'libreria/premium.php';
require_once 'libreria/usuario.php';
?>

<form method="POST" action="">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="lastname" placeholder="Lastname">
    <input type="text" name="identification" placeholder="Identification">
    <input type="text" name="weigth" placeholder="Weight">
    <input type="text" name="heigth" placeholder="Height">
    <select name="plan">
        <option value="simple">Simple</option>
        <option value="half">Half</option>
        <option value="premium">Premium</option>
    </select>
    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? null;
    $lastname = $_POST['lastname'] ?? null;
    $identification = $_POST['identification'] ?? null;
    $weigth = $_POST['weigth'] ?? null;
    $heigth = $_POST['heigth'] ?? null;
    $planType = $_POST['plan'] ?? null;


switch ($planType) {
    case "simple":
        $plan = new Simple();
        break;
    case "half":
        $plan = new Half();
        break;
    case "premium":
        $plan = new Premium();
        break;
    default:
        echo "Invalid plan selected.";
        $plan = null;
        break;
}

if ($plan !== null) {
    $usuario = new Usuario($identification, $name, $lastname, $weigth, $heigth, $plan);

    echo "Name: " . $usuario->getName() . " " . $usuario->getLastname() . "<br>";
    echo "Identification: " . $usuario->getIdentification() . "<br>";
    echo "Weight: " . $usuario->getWeigth() . " kg<br>";
    echo "Height: " . ($usuario->getHeigth() * 100) . " cm<br>";
    echo "Plan: " . $usuario->getPlan()->getName() . "<br>";
    echo "price: " . $usuario->getPlan()->getPrice(). "<br>";
    echo "serivice: " . $usuario->getPlan ()->getService(). "<br>";
} 
}