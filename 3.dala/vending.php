<?php
//produktu izvele. ir nauda. produktam cena. iemet 5 eur, izdod atlikumu monetas no lielaka uz mazako. ja ir 14 centi tad izdod 10 2 2.
//lietotajs izvelas produktu kuru velas pirkt. atlaut lietotajam mest monetas lidz vinjam pietiek nopirkt produktu
//aparata ieksa ir monetu skaits. 100 50cent monetas 200 10cent monetas utt. ja pietrukst kada no monetam tad skatas nakamo lielako 49-20, pietrukst 20, atdod 10 10 utt

$coins = [
    200,
    100,
    50,
    20,
    10,
    5,
    2,
    1,
];

//coins => their amount
$coinsAmount =  [
    200 => 25,
    100 => 50,
    50 => 100,
    20 => 100,
    10 => 0,
    5 => 400,
    2 => 400,
    1 => 400,
];

$currency = 'peso';

function createProducts($name, $price, $currency) {
    $product = new stdClass();
    $product->name = $name;
    $product->price = $price;
    $product->currency = $currency;
    return $product;
}

$products = [
    createProducts('Twix', 55, $currency),
    createProducts('Snickers', 64, $currency),
    createProducts('Mars', 63, $currency),
    createProducts('MilkyWay', 72, $currency),
];

foreach($products as $key => $product) {
    echo "{$key}. {$product->name} costs {$product->price} {$currency}";
    echo PHP_EOL . PHP_EOL;
}

$selection = (int) readline('Enter chocolate to purchase: ');
$selectedProduct = $products[$selection];

if($selectedProduct === null) {
    echo "Invalid selection";
    echo PHP_EOL;
    exit;
}

$insertedMoney = 0;
while($insertedMoney < $selectedProduct->price) {
    $inputMoney = readline("Please, insert your coins in cents. ") ;
    if(in_array($inputMoney, $coins)) {
        $insertedMoney = $inputMoney + $insertedMoney;
        echo "You have inserted {$insertedMoney} {$currency} coins";
        echo PHP_EOL;
    } else {
        echo "Invalid coin";
        echo PHP_EOL;
        continue;
    }
    echo PHP_EOL;
}

$returnedMoney = $insertedMoney - $selectedProduct->price;

echo "Total money to be returned: {$returnedMoney} {$currency}";
echo PHP_EOL . PHP_EOL;

foreach($coinsAmount as $coin => $amount) {
    if($returnedMoney <= 0) {
        return;
    }

    $returnedAmount = intdiv($returnedMoney, $coin);

    if($amount < $returnedAmount) {
        echo "Coins returned: coin: {$coin} / amount: {$amount}";
        echo PHP_EOL;
    } else {
        echo "Coins returned: coin: {$coin} / amount: {$returnedAmount}";
        $returnedMoney -= $coin * $returnedAmount;
        $amount = $amount - $returnedAmount;

        echo PHP_EOL;
    }

}
