strlen() trả về độ dài của một chuỗi.
eg:
<?php
echo strlen("Hello world!"); // outputs 12
?>

str_word_count() - Đếm số từ trong chuỗi
eg:
<?php
echo str_word_count("Hello world!"); // outputs 2
?>

strrev() - Đảo ngược chuỗi
eg:
<?php
echo strrev("Hello world!"); // outputs !dlrow olleH
?>

strpos() - Tìm kiếm văn bản trong một chuỗi:
Hàm PHP strpos()tìm kiếm một văn bản cụ thể trong một chuỗi.
Nếu tìm thấy một kết quả khớp, hàm sẽ trả về vị trí ký tự của kết quả khớp đầu tiên.
Nếu không tìm thấy kết quả phù hợp, nó sẽ trả về FALSE.
eg:
<?php
echo strpos("Hello world!", "world"); // outputs 6
?>

str_replace() - Thay thế văn bản trong chuỗi
<?php
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
?>
