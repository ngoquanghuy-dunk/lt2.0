<?php
function kiemTraChanLe($n) {
    if ($n % 2 == 0) {
        return "Số $n là số chẵn.";
    } else {
        return "Số $n là số lẻ.";
    }
}

// Ví dụ sử dụng hàm
echo kiemTraChanLe(10); // Kết quả: Số 10 là số chẵn.
echo "<br>";
echo kiemTraChanLe(7);  // Kết quả: Số 7 là số lẻ.
?>
