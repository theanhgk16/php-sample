Vòng forlặp - Lặp qua một khối mã một số lần xác định.

PHP cho vòng lặp
Vòng forlặp được sử dụng khi bạn biết trước tập lệnh sẽ chạy bao nhiêu lần.

cú pháp:
for (init counter; test counter; increment counter) {
    code to be executed for each iteration;
}
Thông số:

init counter : Khởi tạo giá trị bộ đếm vòng lặp
bộ đếm kiểm tra : Được đánh giá cho mỗi lần lặp lại vòng lặp. Nếu nó đánh giá là TRUE, vòng lặp tiếp tục. Nếu nó đánh giá là FALSE, vòng lặp kết thúc.
bộ đếm tăng : Tăng giá trị bộ đếm vòng lặp

eg:
<?php
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}
?>