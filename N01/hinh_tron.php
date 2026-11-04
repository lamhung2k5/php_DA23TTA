<?php
require_once("functions_hinhtron.php");

$banKinh = "";
$chucNang = "ca_hai";
$thongBaoLoi = "";
$ketQua = null;

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["btn_tinh"])) {
    $banKinh = trim($_POST["txt_bankinh"] ?? "");
    $chucNang = $_POST["rad_chucnang"] ?? "ca_hai";

    if (!kiemTraBanKinhHopLe($banKinh)) {
        $thongBaoLoi = "Bán kính không hợp lệ! Vui lòng nhập một số dương lớn hơn 0.";
    } else {
        $r = (float)$banKinh;
        $ketQua = [
            'r' => $r,
            'chuc_nang' => $chucNang
        ];

        if ($chucNang === "chu_vi" || $chucNang === "ca_hai") {
            $ketQua['chu_vi'] = round(tinhChuViHinhTron($r), 2);
        }
        if ($chucNang === "dien_tich" || $chucNang === "ca_hai") {
            $ketQua['dien_tich'] = round(tinhDienTichHinhTron($r), 2);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Chu Vi & Diện Tích Hình Tròn</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="header">
        <h2>Hình Tròn</h2>
        <p>Tính Chu Vi & Diện Tích</p>
    </div>

    <?php if (!empty($thongBaoLoi)): ?>
        <div class="alert-error"><?= htmlspecialchars($thongBaoLoi) ?></div>
    <?php endif; ?>

    <form method="post" action="">
        <div class="form-group">
            <label class="label-title" for="txt_bankinh">Bán kính (r):</label>
            <input type="number" step="any" id="txt_bankinh" name="txt_bankinh" 
                   placeholder="Nhập bán kính (ví dụ: 3)" required 
                   value="<?= htmlspecialchars($banKinh) ?>">
        </div>

        <div class="form-group">
            <label class="label-title">Chọn chức năng cần tính:</label>
            <div class="radio-box">
                <label class="radio-item">
                    <input type="radio" name="rad_chucnang" value="chu_vi" <?= $chucNang === 'chu_vi' ? 'checked' : '' ?>>
                    Chỉ tính Chu vi
                </label>
                <label class="radio-item">
                    <input type="radio" name="rad_chucnang" value="dien_tich" <?= $chucNang === 'dien_tich' ? 'checked' : '' ?>>
                    Chỉ tính Diện tích
                </label>
                <label class="radio-item">
                    <input type="radio" name="rad_chucnang" value="ca_hai" <?= $chucNang === 'ca_hai' ? 'checked' : '' ?>>
                    Tính cả Chu vi và Diện tích
                </label>
            </div>
        </div>

        <button type="submit" name="btn_tinh" class="btn-calc">Thực hiện tính toán</button>
    </form>

    <?php if ($ketQua !== null): ?>
        <div class="result-card">
            <div class="result-header">
                <span class="result-badge">Hoàn thành</span>
                <span class="result-radius">Bán kính: <strong>r = <?= $ketQua['r'] ?></strong></span>
            </div>

            <div class="metric-grid">
                <?php if (isset($ketQua['chu_vi'])): ?>
                    <div class="metric-item metric-chuvi">
                        <div class="metric-label">Chu vi</div>
                        <div class="metric-formula">C = 2 &times; &pi; &times; r</div>
                        <div class="metric-value"><?= number_format($ketQua['chu_vi'], 2) ?></div>
                    </div>
                <?php endif; ?>

                <?php if (isset($ketQua['dien_tich'])): ?>
                    <div class="metric-item metric-dientich">
                        <div class="metric-label">Diện tích</div>
                        <div class="metric-formula">S = &pi; &times; r<sup>2</sup></div>
                        <div class="metric-value"><?= number_format($ketQua['dien_tich'], 2) ?></div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
</div>

</body>
</html>