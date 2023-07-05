Mảng kết hợp PHP
Mảng kết hợp là mảng sử dụng các khóa được đặt tên mà bạn gán cho chúng.
Có hai cách để tạo một mảng kết hợp:
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    hoặc:
    $age['Peter'] = "35";
    $age['Ben'] = "37";
    $age['Joe'] = "43";
eg:
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
?>

Lặp qua một mảng kết hợp
Để lặp qua và in ra tất cả các giá trị của một mảng kết hợp, bạn có thể sử dụng một foreachvòng lặp như sau:
eg:
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo " , ";
}
?>
