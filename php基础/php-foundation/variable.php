
<!--<p>变量是用于存储信息的"容器"</p>-->
<?php
//    $x=6;
//    $y=7;
//    $z=$x+$y;
//    echo $z;
//?>
<!---->
<!--<p>创建（声明）PHP变量</p>-->
<?php
//$txt="Hello world!";
//$x=5;
//$y=10.5;
//echo $txt;
//echo '<br>';
//echo $x;
//echo '<br>';
//echo $z;
//?>
<!---->

<!--<p>局部和全局作用域</p>-->
<?php
/*$x1=5; // 全局变量
function myTest()
{
    $y1=10; // 局部变量
    echo "<p>测试函数内变量:<p>";
    echo "变量 x 为: $x1";
    echo "<br>";
    echo "变量 y 为: $y1";
}
myTest();
echo "<p>测试函数外变量:<p>";
echo "变量 x 为: $x1";
echo "<br>";
echo "变量 y 为: $y1";
*/?>

<!--<p>PHP global关键字</p>-->
<?php
/*$x=5;
$y=10;
function myTest()
{
    global $x,$y;
    $y=$x+$y;
}
myTest();
echo $y; // 输出 15
*/?>

<!--<p>Static 作用域</p>-->
<?php
/*function myTest()
{
    static $x=0;
    echo $x;
    $x++;
    echo PHP_EOL;    // 换行符
}
myTest();
myTest();
myTest();
*/?>

<p>参数作用域</p>
<?php
function test($x){
    echo $x;
}
test(6);
?>


