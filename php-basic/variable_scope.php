Phạm vi biến PHP
Trong PHP, các biến có thể được khai báo ở bất kỳ đâu trong tập lệnh.

Phạm vi của một biến là một phần của tập lệnh mà biến đó có thể được tham chiếu/sử dụng.

PHP có ba phạm vi biến khác nhau:
local
global
static

Global and Local Scope:
Một biến được khai báo bên ngoài một hàm có PHẠM VI TOÀN CẦU và chỉ có thể được truy cập bên ngoài một hàm:

eg:
<?php
$x = 5; // global scope

function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

Một biến được khai báo trong một hàm có PHẠM VI ĐỊA PHƯƠNG và chỉ có thể được truy cập trong hàm đó:
eg:
<?php
function myTest1() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is1: $x</p>";
}
myTest1();

// using x outside the function will generate an error
echo "<p>Variable x outside function is1: $x</p>";
?>
