Một mảng lưu trữ nhiều giá trị trong một biến duy nhất:
eg:
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>

Mảng là gì?
Mảng là một biến đặc biệt, có thể chứa nhiều giá trị cùng một lúc.
Nếu bạn có một danh sách các mục (ví dụ: danh sách tên ô tô), việc lưu trữ ô tô trong các biến đơn lẻ có thể giống như sau:

Tạo một mảng trong PHP
Trong PHP, array()hàm được sử dụng để tạo một mảng:

    array();

Trong PHP, có ba loại mảng:
    Mảng được lập chỉ mục - Mảng có chỉ mục số
    Mảng kết hợp - Mảng có khóa được đặt tên
    Mảng nhiều chiều - Mảng chứa một hoặc nhiều mảng

Lấy độ dài của một mảng - Hàm đếm ()
Hàm count()được sử dụng để trả về độ dài (số lượng phần tử) của một mảng:
Ví dụ:
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
?>