Tạo (khai báo) các biến PHP
Trong PHP, một biến bắt đầu bằng $dấu, theo sau là tên của biến:

Quy tắc cho các biến PHP:
Một biến bắt đầu bằng $dấu, theo sau là tên của biến
Tên biến phải bắt đầu bằng một chữ cái hoặc ký tự gạch dưới
Tên biến không được bắt đầu bằng số
Tên biến chỉ có thể chứa các ký tự chữ và số và dấu gạch dưới (Az, 0-9 và _ )
Tên biến phân biệt chữ hoa chữ thường ( $agevà $AGElà hai biến khác nhau)

Câu lệnh PHP echothường dùng để xuất dữ liệu ra màn hình.

eg:
<?php
    $txt = "Hello world!";
    $x = 5;
    $y = 10.5;
?>

<?php
$txt = "W3Schools.com";
echo "I love $txt!";
?>

<?php
$txt = "W3Schools.com";
echo "I love " . $txt . "!";
?>


<?php
$x = 5;
$y = 4;
echo $x + $y;
?>