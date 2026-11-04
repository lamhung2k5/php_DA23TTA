
    <!-- Form nhập dữ liệu -->
    <form method="post" action="">
        <input type="number" name="so_nhap_vao" placeholder="Nhập một số nguyên..." required>
        <button type="submit" name="btn_kiemtra">Kiểm tra ngay</button>
    </form>

    <?php
    
    function kiemTraChiaHetCho5($so) {
        // Sử dụng phép chia lấy phần dư (%)
        if ($so % 5 == 0) {
            return true;
        } else {
            return false;
        }
    }

    
    if (isset($_POST['btn_kiemtra'])) {
        // Lấy giá trị số từ form nhập vào
        $so_kiem_tra = $_POST['so_nhap_vao'];

        
        if (kiemTraChiaHetCho5($so_kiem_tra)) {
            echo "<div class='ket-qua thanh-cong'> Số $so_kiem_tra <b>chia hết</b> cho 5.</div>";
        } else {
            echo "<div class='ket-qua that-bai'>❌ Số $so_kiem_tra <b>không chia hết</b> cho 5.</div>";
        }
    }
    ?>
