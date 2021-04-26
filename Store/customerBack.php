<?php
$username = $_POST["username"];
$password = $_POST["password"];
$item1Num = $_POST["quantityCat"];
$item2Num = $_POST["quantityDog"];
$item3Num = $_POST["quantityLamp"];
$shippingVal = $_POST["shipping"];


$arrayItems = [
    0 => "Cat Toy",
    1 => "Dog Toy",
    2 => "Lamp"
];

$arrayCost = [
    0 => 10,
    1 => 12,
    2 => 20,
];

$arrayQuant = [
    0 => $item1Num,
    1 => $item2Num,
    2 => $item3Num,
];

$arrayTH = [
    0 => "Quantity",
    1 => "Cost Per Item",
    2 => "Sub Total",
];
echo '<div class="summary" style="border: 5px solid black; padding-left: 40%;">';
echo '<h1>Welcome '.$username.'</h1><br>';
echo '<p style="padding-left: 6%">Your password is: <b>'.$password.'</b></p><br><br>';

echo '<table style="border: 1px solid black; background-color: aqua;"><thead><tr>';
echo '<th style="border: 1px solid black;"></th>';

$total = 0;

for($i = 0; $i < 3; $i++) {
    echo '<th style="border: 1px solid black;">'.$arrayTH[$i].'</th>';
}

echo '</tr></thead><tbody>';

for($i = 0; $i < 3; $i++) {
    echo '<tr>';
    echo '<td style="border: 1px solid black;"><b>'.$arrayItems[$i].'</b></td>';

    echo '<td>'.$arrayQuant[$i].'</td>';
    echo '<td>$'.$arrayCost[$i].'</td>';
    $temp = $arrayQuant[$i] * $arrayCost[$i];
    echo '<td>$'.$temp.'</td>';
    
    echo '</tr>';
    $total += $temp;
}


    echo '<tr>';
    echo '<td style="border: 1px solid black;"><b>Shipping</b></td>';

    if($shippingVal == "free") {
        echo '<td colspan="2" style="text-align: center;">Free</td>';
        $temp = 0;
    } else if($shippingVal == "night") {
        echo '<td colspan="2" style="text-align: center;">Overnight</td>';
        $temp = 50;
    } else {
        echo '<td colspan="2" style="text-align: center;">Three Day</td>';
        $temp = 5;
    }
   
    echo '<td>$'.$temp.'</td>';
    
    echo '</tr>';
    $total += $temp;


echo '<tr>';
echo '<td colspan="3" style="text-align: center; border: 1px solid black;"><b>Total Cost</b></td>';
echo '<td>$'.$total.'</td>';

echo '</tbody></table>';
echo '</div>';

?>