<?php

/*
 * kafijas aparāts
 * Maks, kurā atrodas monētas
 *
 * iemetam monētas
 * iemest - 10, 3 - neeksistē, 2 - - 0.12$
 * izvēlēties dzērienu
 *
 * Atlikums ir jāizdod monētās, sākot ar lielāko
 */

$wallet = [
    1 => 5,
    2 => 5,
    5 => 6,
    10 => 7,
    20 => 9,
    50 => 2,
    100 => 4,
    200 => 3,
    ];

foreach ($wallet as $coin => $amount) {
    echo "$coin ($amount) | ";
}
echo PHP_EOL;

$selection = (int) readline('Select your drink: ');
echo PHP_EOL;

switch ($selection) {
    case 1:
        $espresso = readLine('Espresso costs 1.60. Press "enter" to continue.');
        break;
    case 2:
        $macchiato = readLine('Macchiato costs 1.50. Press "enter" to continue.');
        break;
    case 3:
        $cappuchino = readLine('Cappuchino costs 1.35. Press "enter" to continue.');
        break;
}
echo PHP_EOL;

// $price = (int);

switch ($price) {
    case 1:
        $espresso = 1.60;
        break;
    case 2:
        $macchiato = 1.50;
        break;
    case 3:
        $cappuchino = 1.35;
        break;
}

$insertedAmount = 0;
$insertedCoin = (int) readline('Insert coin: ');

if (!isset($wallet[$insertedCoin])) {
    echo 'Invalid coin.';
    exit;
    }

if (!$wallet[$insertedCoin]) {
    echo 'You dont have such coin.';
    exit;
}

$wallet[$insertedCoin] -= 1;
$insertedAmount += $insertedCoin;

echo 'INSERTED: ' . $insertedAmount;
echo PHP_EOL;

while ($insertedAmount < $price) {
    $insertedCoin = (int)readline('Insert next coin: ');
}
    if ($insertedAmount = $price) {
    echo 'Enjoy your drink!' . PHP_EOL;
}

foreach ($wallet as $coin => $amount) {
    echo "$coin ($amount) | ";
}
echo PHP_EOL;

    if (($wallet[$insertedCoin]) <= 0) {
        echo 'You dont have such coin.';
        exit;
    }

    $wallet[$insertedCoin]  -= 1;
    $insertedAmount += $insertedCoin;
