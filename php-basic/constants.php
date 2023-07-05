Hằng số PHP
Hằng số là một định danh (tên) cho một giá trị đơn giản. Giá trị không thể thay đổi trong tập lệnh.
Tên hằng hợp lệ bắt đầu bằng một chữ cái hoặc dấu gạch dưới (không có dấu $ trước tên hằng).
Lưu ý: Không giống như các biến, các hằng tự động có tính toàn cầu trên toàn bộ tập lệnh.

Tạo một hằng số PHP
    Để tạo một hằng số, hãy sử dụng define()hàm.
    cú pháp:
        define(name, value, case-insensitive)
eg:

<?php
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;
?>

eg1:
<?php
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;
?>

Mảng hằng PHP
Trong PHP7, bạn có thể tạo một hằng số Mảng bằng cách sử dụng define()hàm.
eg:
<?php
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo cars[0];
?>