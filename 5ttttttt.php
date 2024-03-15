<?php
// Создание ассоциативного массива с информацией о продуктах (название и цена)
$products = array(
    "молоко" => 80,
    "сыр" => 150,
    "яйца" => 60,
    "хлеб" => 40
);

// Нахождение товара с самой высокой ценой
$maxPrice = 0;
$maxPriceProduct = "";
foreach ($products as $product => $price) {
    if ($price > $maxPrice) {
        $maxPrice = $price;
        $maxPriceProduct = $product;
    }
}

// Вывод товара с самой высокой ценой
echo "Товар с самой высокой ценой: " . $maxPriceProduct . " (Цена: " . $maxPrice . ")";
?>
