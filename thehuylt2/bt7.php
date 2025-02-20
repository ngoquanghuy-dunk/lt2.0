<?php
function demSoTu($chuoi) {
    // Loại bỏ các khoảng trắng thừa ở đầu và cuối chuỗi
    $chuoi = trim($chuoi);
    
    // Nếu chuỗi rỗng, trả về 0
    if (empty($chuoi)) {
        return 0;
    }
    
    // Tách chuỗi thành mảng các từ và đếm số lượng từ
    $mangTu = explode(" ", $chuoi);
    
    // Lọc các phần tử rỗng (nếu có khoảng trắng liên tiếp) và trả về số lượng từ
    $mangTu = array_filter($mangTu);
    
    return count($mangTu);
}

// Ví dụ sử dụng hàm
$chuoi = "Đây là một chuỗi ví dụ.";
echo "Số từ trong chuỗi là: " . demSoTu($chuoi); // Kết quả: 5
?>
