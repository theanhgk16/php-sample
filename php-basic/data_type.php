PHP String
eg:
<?php
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;
?>

PHP Integer
Hàm PHP var_dump() trả về kiểu dữ liệu và giá trị:
eg:
<?php
$x = 5985;
var_dump($x);
?>

PHP Float
eg:
<?php
$x = 10.365;
var_dump($x);
?>

PHP Boolean
$x = true;
$y = false;

PHP Array
<?php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>

PHP Object
hàm __construct(), PHP sẽ tự động gọi hàm này khi bạn tạo một đối tượng từ một lớp.
eg:
<?php
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>

PHP NULL Value
Null là một kiểu dữ liệu đặc biệt chỉ có thể có một giá trị: NULL.
Biến có kiểu dữ liệu NULL là biến không có giá trị được gán cho nó.
eg:
<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>
