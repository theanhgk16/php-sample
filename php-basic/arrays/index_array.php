Mảng được lập chỉ mục PHP
Có hai cách để tạo các mảng được lập chỉ mục:
    Chỉ mục có thể được gán tự động (chỉ mục luôn bắt đầu từ 0), như sau:
        $cars = array("Volvo", "BMW", "Toyota");
        hoặc chỉ mục có thể được chỉ định thủ công:

        $cars[0] = "Volvo";
        $cars[1] = "BMW";
        $cars[2] = "Toyota";

        eg:
        <?php
        $cars = array("Volvo", "BMW", "Toyota");
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
        ?>

Lặp qua một mảng được lập chỉ mục
Để lặp qua và in tất cả các giá trị của một mảng được lập chỉ mục, bạn có thể sử dụng một forvòng lặp như sau:
eg:
<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo " , ";
}
?>
