Câu switchlệnh được sử dụng để thực hiện các hành động khác nhau dựa trên các điều kiện khác nhau.
Câu lệnh chuyển đổi PHP
Sử dụng switchcâu lệnh để chọn một trong nhiều khối mã sẽ được thực thi .

cú pháp:
switch (n) {
    case label1:
        code to be executed if n=label1;
        break;
    case label2:
        code to be executed if n=label2;
        break;
    case label3:
        code to be executed if n=label3;
        break;
...
    default:
        code to be executed if n is different from all labels;
}

eg:
<?php
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?>