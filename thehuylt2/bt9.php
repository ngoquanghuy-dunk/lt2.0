<?php
function demKyTuXuatHien($chuoi, $kyTu) {
    return substr_count($chuoi, $kyTu);
}

// Ví dụ sử dụng hàm
$chuoi = "hello world";
$kyTu = "o";
echo "Ký tự '$kyTu' xuất hiện " . demKyTuXuatHien($chuoi, $kyTu) . " lần."; // Kết quả: Ký tự 'o' xuất hiện 2 lần.
?>
