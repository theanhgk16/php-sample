Vòng foreachlặp - Lặp qua một khối mã cho mỗi phần tử trong một mảng.

Vòng lặp foreach PHP
Vòng foreachlặp chỉ hoạt động trên mảng và được sử dụng để lặp qua từng cặp khóa/giá trị trong một mảng.

cú pháp
foreach ($array as $value) {
    code to be executed;
}
eg:
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value , ";
}
?>