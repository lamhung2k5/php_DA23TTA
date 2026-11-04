<?php
    include("header.php");
?>

<?php
    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];

        switch($id){
            case 1:
                echo "<h3>Bài tập nhóm 15</h3>";
                include("bt_cac_nhom/n15.php");
                break;
            case 2:
                echo "<h3>Bài tập nhóm 17</h3>";
                include("bt_cac_nhom/n17.php");
                break;
            case 3:
                echo "<h3>Bài tập số 2</h3>";
                include("bt1.php");
                break;
            default:
                echo "bài tập không tồn tại";
        }
    }
    else
    {
        echo "nhập bài tập bên trái";
    }
?>
<?php
    include("footer.php");
?>