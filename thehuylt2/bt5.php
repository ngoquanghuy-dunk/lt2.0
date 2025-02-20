<?php
function kiemTraSoNguyenTo($n) {
    if ($n <= 1) {
        return "Số $n không phải là số nguyên tố.";
    }
    
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return "Số $n không phải là số nguyên tố.";
        }
    }
    
    return "Số $n là số nguyên tố.";
}

// Ví dụ sử dụng hàm
$n = 29;
echo kiemTraSoNguyenTo($n); // Kết quả: Số 29 là số nguyên tố.
?>
