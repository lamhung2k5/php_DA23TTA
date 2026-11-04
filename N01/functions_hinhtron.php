<?php
/**
 * Tính chu vi hình tròn: C = 2 * pi * r
 */
function tinhChuViHinhTron($r) {
    return 2 * pi() * $r;
}

/**
 * Tính diện tích hình tròn: S = pi * r^2
 */
function tinhDienTichHinhTron($r) {
    return pi() * pow($r, 2);
}

/**
 * Kiểm tra tính hợp lệ của bán kính nhập vào
 */
function kiemTraBanKinhHopLe($r) {
    return is_numeric($r) && (float)$r > 0;
}
?>