<?php
function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

// Ví dụ sử dụng hàm
$n = 10;
$result = fibonacci($n);
echo "Số Fibonacci thứ $n là: $result";
?>
