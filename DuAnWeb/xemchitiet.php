<?php
    include("header.php");
    session_start();
?>

<?php
    include("ketnoi.php");
    $sql = "select * from sach";
    $kq = mysqli_query($conn,$sql);
    $count = 1;
?>

<div class="books-list">
    <table>
    <?php while($row = mysqli_fetch_array($kq)) : ?>
        <tr>
            <td><?=$count++?></td>
            <td><img src="<?=$row["hinhsach"]?>" alt=""></td>
            <td>
                <p>tên sách: <?=$row["tensach"]?></p>
                <p>giá: <?=$row["gia"]?></p>
                <p>mô tả: <?=$row["mota"]?></p> 
                <p>nhà xuất bản: <?=$row["nxb"]?></p>
                <a href="xemchitiet.php">xem chi tiết</a>
            </td>
        </tr>
    <?php endwhile; ?>
    </table>
        
</div>

<?php
    include("footer.php");
    $_SESSION["error_message"] = " ";
?>