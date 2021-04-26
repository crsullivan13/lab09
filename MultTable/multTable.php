<?php
echo '<table><thead><tr>';

echo '<th></th>';

for($i = 1; $i <= 100; $i++) {
    echo '<th>'.$i.'</th>';
}

echo '</tr></thead><tbody>';

for($i = 1; $i <= 100; $i++) {
    echo '<tr>';
    echo '<td>'.$i.'</td>';
    for($j = 1; $j <= 100; $j++) {
        $temp = $i * $j;
        echo '<td>'.$temp.'</td>';
    }
    echo '</tr>';
}

echo '</tbody></table>';

?>