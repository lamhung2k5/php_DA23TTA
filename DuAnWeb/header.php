<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--<link rel="stylesheet" type="text/css" href="css/style.css">-->
    <style>
            .grid-container{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
        color: #fff;
        grid-area: banner;
        
        background-color: #00a36c;
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
        background-color: red;
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
        padding: 10px;
    }
    
    </style>
</head>
<body>
    <div class="grid-container">
        <div class="banner">BÀI TẬP VỀ PHP</div>
        <div class="thanh-ngang">
            <marquee behavior="" direction="">bài tập php của sinh viên Hưng</marquee>
        </div>
        <div class="content-container">
            <div class="left-menu">
                <h3>BÀI TẬP PHP</h3>
                <a href="index.php?id=1"> bài nhóm 15</a><br>
                <a href="index.php?id=2"> bài nhóm 17</a><br>
                <a href="index.php?id=3"> bài tập máy tính</a><br>
            </div>
            <div class="content">