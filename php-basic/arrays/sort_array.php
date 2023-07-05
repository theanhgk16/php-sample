PHP - Hàm Sắp Xếp Cho Mảng
Trong chương này, chúng ta sẽ tìm hiểu các hàm sắp xếp mảng PHP sau:

sort()- Sắp xếp mảng theo thứ tự tăng dần
rsort()- Sắp xếp mảng theo thứ tự giảm dần
asort()- sắp xếp các mảng kết hợp theo thứ tự tăng dần, theo giá trị
ksort()- sắp xếp các mảng kết hợp theo thứ tự tăng dần, theo khóa
arsort()- sắp xếp các mảng kết hợp theo thứ tự giảm dần, theo giá trị
krsort()- sắp xếp các mảng kết hợp theo thứ tự giảm dần, theo khóa

Sắp xếp mảng theo thứ tự tăng dần - sort():
<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
?>

<?php
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
?>
