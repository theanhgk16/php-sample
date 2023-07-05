echovà print ít nhiều giống nhau. Cả hai đều được sử dụng để xuất dữ liệu ra màn hình.
Sự khác biệt là nhỏ: echo không có giá trị trả về trong khi print có giá trị trả về là 1 để có thể sử dụng nó trong các biểu thức.
echo có thể nhận nhiều tham số (mặc dù việc sử dụng như vậy rất hiếm) trong khi print có thể nhận một đối số.
echo nhanh hơn một chút so với print.

Câu echo lệnh có thể được sử dụng có hoặc không có dấu ngoặc đơn: echo hoặc echo().
eg:
<?php
    echo "PHP is Fun!";
    echo "Hello world!";
    echo "I'm about to learn PHP!";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?>


<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "+" . $txt1 . "+";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;
?>


Câu printlệnh có thể được sử dụng có hoặc không có dấu ngoặc đơn: printhoặc print().
<?php
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
?>

