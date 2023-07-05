Các hàm do người dùng định nghĩa PHP
Bên cạnh các hàm PHP có sẵn, bạn có thể tạo các hàm của riêng mình.

Hàm là một khối các câu lệnh có thể được sử dụng lặp đi lặp lại trong một chương trình.
Một hàm sẽ không tự động thực thi khi tải trang.
Một chức năng sẽ được thực hiện bởi một cuộc gọi đến chức năng.
Tạo một hàm do người dùng định nghĩa trong PHP
Một khai báo hàm do người dùng định nghĩa bắt đầu bằng từ function:

cú pháp:
function functionName() {
    code to be executed;
}
eg:
<?php
function writeMsg() {
    echo "Hello world!";
}

writeMsg(); // call the function
?>