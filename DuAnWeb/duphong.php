<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .grid-container{
        display: grid;
        grid-template-rows: 100px 50px auto 100px;
        grid-template-areas: 
        "banner"
        "sub-banner"
        "content"
        "footer";

        min-height: 100vh;
    }

    .grid-container div.banner{
        font-weight: 700;
        grid-area: banner;
        border: 2px solid #000000;

        display: flex;
        align-items: center;
        justify-content: center;
    }

    .grid-container div.thanh-ngang{
        border: 2px solid #000000;
        grid-area: sub-banner;
    }

    /* chia grid cho phần nội dung: 3 cột */
    .grid-container div.content-container{
        border: 2px solid #000000;
        grid-area: content;
        display: grid;
        grid-template-columns: 1fr 3fr 1fr;
        grid-template-areas: 
        "left-menu content right-menu";
    }

    .grid-container div.footer{
        grid-area: footer;
        border: 2px solid #000000;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /*sắp xếp các thẻ div trng content-container cho phù hợp*/
    div.content-container div.left-menu{
        border: 2px solid #000000;
        grid-area: left-menu;
    }

    div.content-container div.content{
        border: 2px solid #000000;
        grid-area: content;
    }

    div.content-container div.right-menu{
        border: 2px solid #000000;
        grid-area: right-menu;
    }

    /*chỉnh bố cục phần đăng nhập*/
    .log-in-box{
        border: 2px solid #50f323;
    }

    form{
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
        gap: 10px;
    }

    form .login-button{
        margin-bottom: 10px;
    }

    .account-name, .password{
        padding: 10px   x`;
    }
    

</style>

<body>
    <div class="grid-container">
        <div class="banner">BÀI TẬP VỀ PHP</div>
        <div class="thanh-ngang">
            <marquee behavior="" direction="">bài tập php của sinh viên Hưng nè</marquee>
        </div>
        <div class="content-container">
            <div class="left-menu">
                <h3>BÀI TẬP PHP</h3>
                <a href="#"> bài tập máy tính</a>
            </div>
            <div class="content">nội dung hiển thị ở đây nè</div>
            <div class="right-menu">
                <div class="log-in-box">
                    <form action="" method="post" name="frmDangNhap">
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
            </div>
        </div>
        <div class="footer">Bài tập PHP của sinh viên Lâm Tấn Hưng - DA23TTA</div>
    </div>
</body>

</html>