<?php

$arr = [];

while (count($arr) != 100) {
    $arr = array_unique($arr);
    array_push($arr, rand(1, 100));
}

arsort($arr);

echo "<table border='1'>";
foreach (array_values($arr) as $key => $value) {
    ++$key;
    echo "<tr>";
    echo "<td>$key</td>";
    echo "<td>".$value."</td>";
    echo "</tr>";
}
echo "</table>";

?>

<style>
    table {
        border-collapse: collapse;
    }

    td {
        border: 1px solid black;
        width: 10%;
        text-align: center;
    }
</style>
