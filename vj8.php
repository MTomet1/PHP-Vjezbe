<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Izbor vozila</title>
</head>
<body>

<?php
$cars = array("Audi", "BMW", "Renault", "Citroen");

$selectedCar = isset($_POST['car']) ? $_POST['car'] : null;

echo "<form method='post'>";
echo "<p>Označi vozilo:</p>";
foreach ($cars as $car) {
    $checked = ($car === $selectedCar) ? "checked" : "";
    echo "<label>";
    echo "<input type='radio' name='car' value='$car' $checked> $car";
    echo "</label><br>";
}
echo "<input type='submit' value='Pošalji'>";
echo "</form>";

foreach ($cars as $car) {
    if ($car == $selectedCar) {
        echo "<strong>$selectedCar</strong>";    }
}
?>
</body>
</html>
