Vòng do...whilelặp - Lặp qua một khối mã một lần, sau đó lặp lại vòng lặp miễn là điều kiện đã chỉ định là đúng.

Vòng lặp do...while trong PHP
Vòng do...whilelặp sẽ luôn thực thi khối mã một lần, sau đó nó sẽ kiểm tra điều kiện và lặp lại vòng lặp trong khi điều kiện đã chỉ định là đúng.

cú pháp:
do {
    code to be executed;
} while (condition is true);
eg:
<?php
$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
?>