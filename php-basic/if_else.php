Trong PHP chúng ta có các câu lệnh điều kiện sau:

if câu lệnh - thực thi một số mã nếu một điều kiện là đúng
if...elsecâu lệnh - thực thi một số mã nếu một điều kiện là đúng và một mã khác nếu điều kiện đó là sai
if...elseif...elsecâu lệnh - thực thi các mã khác nhau cho hơn hai điều kiện
switch câu lệnh - chọn một trong nhiều khối mã sẽ được thực thi

PHP - Câu lệnh if
Câu iflệnh thực thi một số mã nếu một điều kiện là đúng:

if (condition) {
code to be executed if condition is true;
}

eg:
<?php
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}
?>

PHP - Câu lệnh if...else
Câu if...elselệnh thực thi một số mã nếu một điều kiện là đúng và một mã khác nếu điều kiện đó là sai.
cú pháp:
if (condition) {
code to be executed if condition is true;
} else {
code to be executed if condition is false;
}
eg:
<?php
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>

PHP - Câu lệnh if...elseif...else
Câu if...elseif...elselệnh thực thi các mã khác nhau cho nhiều hơn hai điều kiện.
cú pháp:
if (condition) {
code to be executed if this condition is true;
} elseif (condition) {
code to be executed if first condition is false and this condition is true;
} else {
code to be executed if all conditions are false;
}

eg:
<?php
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>
