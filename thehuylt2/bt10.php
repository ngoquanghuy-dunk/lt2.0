<?php
function tachChuoi($chuoi, $kyTuPhanCach) {
    return explode($kyTuPhanCach, $chuoi);
}

// Ví dụ sử dụng hàm
$chuoi = "apple,banana,orange";
$kyTuPhanCach = ",";
$mang = tachChuoi($chuoi, $kyTuPhanCach);
print_r($mang); // Kết quả: Array ( [0] => apple [1] => banana [2] => orange )
?>
