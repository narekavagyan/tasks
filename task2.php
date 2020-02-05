<form action="task2.php" method="post">
    <div align="center" style="border: 1px solid black; width: 20%; height: 40%">
        <input type="number" placeholder="տողի երկարությունը" style="margin-top: 5px" name="len">
        <br>
        <p>Տողի մեջ ներառել</p>
        <select name="opt">
            <option value="nums">Թվեր</option>
            <option value="chars">Տառեր</option>
            <option value="nc">Թվեր և տառեր</option>
        </select>
        <br>
        <input type="submit" name="submit" value="գեներացնել" style="margin-top: 7rem">
    </div>
</form>

<?php

$len = $_POST['len'];
$opt = $_POST['opt'];

function generateRandomString($len, $opt)
{
    $arr1 = range(0, 9);
    $arr2 = array_merge(range('a', 'z'), range('A', 'Z'));
    $arr3 = array_merge(range(0, 9), range('a', 'z'), range('A', 'Z'));

    $numLength = count($arr1);
    $charLength = count($arr2);
    $ncLength = count($arr3);

    $arr1Random = $arr1[rand(0, $numLength - 1)];
    $arr2Random = $arr2[rand(0, $charLength - 1)];
    $arr3Random = $arr3[rand(0, $ncLength - 1)];

    $randomString = '';

    if ($opt == 'nums') {
        for ($i = 0; $i < $len; $i++) {
            $randomString .= $arr1Random;
        }
    } elseif ($opt == 'chars') {
        for ($i = 0; $i < $len; $i++) {
            $randomString .= $arr2[rand(0, $charLength - 1)];
        }
    } elseif ($opt == 'nc' && $len == 2) {
        $randomString .= $arr3Random;
        $randomString .= is_numeric($randomString) ? $arr2Random : $arr1Random;
    } else {
        for ($i = 0; $i < $len; $i++) {
            $randomString .= $arr3[rand(0, $ncLength - 1)];;
        }
    }
    echo $randomString;
    echo '<br>';

    $numbers = '';
    $letters = '';

    for ($i = 0; $i < strlen($randomString); $i++) {
        if (is_numeric($randomString[$i])) {
            $numbers .= $randomString[$i];
        } else {
            $letters .= $randomString[$i];
        }
    }

    echo '<br>';
    echo "Numbers: $numbers";
    echo '<br>';
    echo "Letters: $letters";
}

generateRandomString($len, $opt);
