PHP Integers
Dưới đây là một số quy tắc cho số nguyên:
    Một số nguyên phải có ít nhất một chữ số
    Một số nguyên KHÔNG được có dấu thập phân
    Một số nguyên có thể là dương hoặc âm
    Số nguyên có thể được chỉ định ở ba định dạng: thập phân (dựa trên 10), thập lục phân (dựa trên 16 - có tiền tố là 0x)
    hoặc bát phân (dựa trên 8 - có tiền tố là 0)

PHP có các hằng số được xác định trước sau đây cho số nguyên:
    PHP_INT_MAX - Số nguyên lớn nhất được hỗ trợ
    PHP_INT_MIN - Số nguyên nhỏ nhất được hỗ trợ
    PHP_INT_SIZE - Kích thước của một số nguyên tính bằng byte

PHP có các hàm sau để kiểm tra xem kiểu của một biến có phải là số nguyên hay không:
    is_int()
    is_integer() - bí danh của is_int()
    is_long() - bí danh của is_int()

eg:
<?php
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));
?>

PHP Floats
PHP có các hằng số được xác định trước sau đây cho số float (từ PHP 7.2):
    PHP_FLOAT_MAX - Số dấu phẩy động có thể biểu thị lớn nhất
    PHP_FLOAT_MIN - Số dấu phẩy động dương nhỏ nhất có thể biểu thị
    PHP_FLOAT_DIG - Số chữ số thập phân có thể được làm tròn thành số float và ngược lại mà không làm mất độ chính xác
    PHP_FLOAT_EPSILON - Số dương nhỏ nhất có thể biểu diễn x, sao cho x + 1,0 != 1,0
PHP có các hàm sau để kiểm tra xem kiểu của một biến có phải là float hay không:
    is_float()
    is_double() - bí danh của is_float()

eg:
<?php
$x = 10.365;
var_dump(is_float($x));
?>

PHP Infinity
Giá trị số lớn hơn PHP_FLOAT_MAX được coi là vô hạn.
PHP has the following functions to check if a numeric value is finite or infinite:
    is_finite()
    is_infinite()
eg:
<?php
$x = 1.9e411;
var_dump($x);
?>

PHP NaN
NaN là viết tắt của Không phải là một số.
NaN được sử dụng cho các phép toán bất khả thi.
PHP có các hàm sau để kiểm tra xem giá trị có phải là số không:
    is_nan()
eg:
<?php
$x = acos(8);
var_dump($x);
?>

PHP Numerical Strings
Hàm is_numeric() trong PHP có thể được sử dụng để tìm xem một biến có phải là số hay không.
Hàm trả về true nếu biến là một số hoặc một chuỗi số, ngược lại là false.

eg:
<?php
$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));
?>

PHP Casting Strings and Floats to Integers
Hàm (int), (integer) hoặc intval() thường được sử dụng để chuyển đổi một giá trị thành số nguyên.
eg:
<?php
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>




