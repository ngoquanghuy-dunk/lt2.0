<?php
function daoNguocChuoi($chuoi) {
    return strrev($chuoi);
}

// Ví dụ sử dụng hàm
$chuoi = "Hello World";
$chuoiDaoNguoc = daoNguocChuoi($chuoi);
echo "Chuỗi đảo ngược của chuỗi '$chuoi' là: '$chuoiDaoNguoc'";
?>
