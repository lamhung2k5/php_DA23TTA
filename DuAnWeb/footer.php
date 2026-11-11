</div>
            <div class="right-menu">
                <?php if(isset($_SESSION["username"])) : ?>
                    <?php if($_SESSION["role"] == "user") :  ?>
                        <h3>Xin chào <?=$_SESSION["username"]?></h3>
                        <a href="">xem thông tin cá nhân</a>
                        <br>
                        <a href="thoat.php">thoát</a>
                    <?php elseif($_SESSION["role"] == "admin") : ?>
                        <h3>Xin chào <?=$_SESSION["username"]?></h3>
                        <a href="">quản trị người dùng</a>
                        <br>
                        <a href="thoat.php">thoát</a>
                    <?php endif;?>
                <?php else : ?>
                    <h3><?= $_SESSION["error_message"]?></h3>
                    <div class="log-in-box">
                        <form action="xly_dangnhap.php" method="post" name="frmDangNhap">
                            <p>ĐĂNG NHẬP</p>
                            <div class="account-name">
                                <p>Tên đăng nhập</p>
                                <input type="text" name="txtDangNhap" id="" placeholder="Nhập tên đăng nhập">
                            </div>
                            <div class="password">
                                <p>Mật khẩu</p>
                                <input type="password" name="txtMatKhau" id="" placeholder="Nhập mật khẩu">
                            </div>
                            <div class="login-button">
                                <button type="submit" name="btnDangNhap" value="DangNhap">Đăng nhập</button>
                                <button type="reset" name="btnHuyBo" value="HuyBo">Hủy bỏ</button>
                            </div>
                        </form>  
                    </div>
                <?php endif;?>
                
            </div>
        </div>
        <div class="footer">Bài tập PHP của sinh viên Lâm Tấn Hưng - DA23TTA</div>
    </div>
</body>

</html>