Uzdevums 1:
Aprēķini masīva summu.

<?php

$numbers = [1, 2, 3, 4, 5];
$sum = 0;

foreach ($numbers as $number) {
$sum += $number;
}

echo "Sum: " . $sum;

?>

<br> Uzdevums 2:
Atrodi maksimālo vērtību masīvā
 
<?php

$numbers = [4, 43, 35, 53, 60, 3, 30];
$max = $numbers[0];

foreach ($numbers as $number) {
if ($number > $max) {
$max = $number;
}
}

echo 'Max: ' . $max ;

?>

<br> Uzdevums 3:
Aprēķini masīvā vidējo vērtību

<?php

$numbers = [1, 2, 3, 4, 5];
$sum = 0;
$count = 0;

foreach ($numbers as $number) {
$sum += $number;
$count++;
}

$average = $sum / $count;

echo 'Average: ' . $average;

?>

<br>Uzdevums 4:
Atrodi minimālo vērtību masīvā

<?php

$numbers = [4, 43, 35, 53, 60, 3, 30];
$min = $numbers[0]; 

foreach ($numbers as $number) {
    if ($number < $min) {
        $min = $number; 
    }
}

echo "Minimum: " . $min;

?>

<br>Uzdevums 5:
Saskaiti cik masīvā ir pāra un cik nepāra skaitļi.

<?php

$evenCount = 0;
$oddCount = 0;

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $evenCount++; 
    } else {
        $oddCount++; 
    }
}

echo "Even: " . $evenCount . "; Odd: " . $oddCount;

?>

<br>Uzdevums 6:
Apgriez masīvu otrādi.

<?php

$numbers = [1, 2, 3, 4, 5];
$length = count($numbers);

for ($i = 0; $i < $length / 2; $i++) {
    $temp = $numbers[$i];
    $numbers[$i] = $numbers[$length - $i - 1];
    $numbers[$length - $i - 1] = $temp;
}

echo "Inverse: [" . implode(", ", $numbers) . "]";

?>

<br>Uzdevums 7:
Izdzēs ierakstu dublikātus masīvā.

<?php

$numbers = [1, 2, 3, 4, 5, 5, 5, 6, 7];
$uniqueNumbers = [];

foreach ($numbers as $number) {
    if (!in_array($number, $uniqueNumbers)) {
        $uniqueNumbers[] = $number; 
    }
}

echo "Unique: [" . implode(", ", $uniqueNumbers) . "]";

?>

<br>Uzdevums 8:
Apvieno divus masīvus.

<?php

$array1 = [1, 2, 3];
$array2 = [5, 6, 7];
$mergedArray = [];

foreach ($array1 as $element) {
    $mergedArray[] = $element; 
}

foreach ($array2 as $element) {
    $mergedArray[] = $element; 
}

echo "Merged: " . print_r($mergedArray);

?>