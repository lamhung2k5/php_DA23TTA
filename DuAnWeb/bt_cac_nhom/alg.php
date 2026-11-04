<?php
    include("../header.php");
?>

<?php
$n=$_POST["txtNhap"];

echo ("Số vừa nhập: " .$n. "<br>");

//ham in so tron chục
function TronChuc($num)
{
    echo "DS số tròn chục: <br>";
    for($i = 10; $i <= $num; $i++)
    {
        if($i % 10 == 0)
        {
            echo $i." ";
        }
    }
    echo "<br>";
}

function TronTram($num)
{
    echo "DS số tròn trăm: <br>";
    for($i = 100; $i <= $num; $i++)
    {
        if($i % 100 == 0)
        {
            echo $i." ";
        }
    }
    echo "<br>";
}


function TronNgan($num)
{
    echo "DS số tròn ngàn: <br>";
    for($i = 1000; $i <= $num; $i++)
    {
        if($i % 1000 == 0)
        {
            echo $i." ";
        }
    }
    echo "<br>";
}

function PrintNumber($a)
{
    if($a < 10)
    {
        echo "không tồn tại danh sách các số tròn chục tròn trăm tròn ngàn. <br>";
        return;
    }

    if($a < 100)
    {
        TronChuc($a);
    }
    elseif($a < 1000)
    {
        TronChuc($a);
        TronTram($a);
    }
    else
    {
        TronChuc($a);
        TronTram($a);
        TronNgan($a);
    }
    

}

PrintNumber($n);
?>

<?php
    include("../footer.php");
?>
