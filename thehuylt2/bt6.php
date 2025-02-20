<?php
function kiemTraNamNhuan($nam) {
    if (($nam % 4 == 0 && $nam % 100 != 0) || ($nam % 400 == 0)) {
        return "Năm $nam là năm nhuận.";
    } else {
        return "Năm $nam không phải là năm nhuận.";
    }
}

// Ví dụ sử dụng hàm
$nam = 2024;
echo kiemTraNamNhuan($nam); // Kết quả: Năm 2024 là năm nhuận.
?>
