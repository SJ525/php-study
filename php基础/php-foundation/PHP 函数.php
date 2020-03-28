<p>一个简单的函数，在其被调用时能输出我的名称：</p>
<?php
function writeName()
{
    echo "Kai Jim Refsnes";
}

echo "My name is ";
writeName();
?>

<p>PHP 函数 - 返回值</p>
<?php
function add($x,$y)
{
    $total=$x+$y;
    return $total;
}
echo "1 + 16 = " . add(1,16);
?>
