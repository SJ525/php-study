<!--<p>PHP 算术运算符</p>
<?php
/*    $x=10;
    $y=6;
    echo ($x + $y); // 输出16
    echo '<br>';  // 换行

    echo ($x - $y); // 输出4
    echo '<br>';  // 换行

    echo ($x * $y); // 输出60
    echo '<br>';  // 换行

    echo ($x / $y); // 输出1.6666666666667
    echo '<br>';  // 换行

    echo ($x % $y); // 输出4
    echo '<br>';  // 换行

    echo -$x;
*/?>

<p>整数相除函数</p>
--><?php
/*var_dump(intdiv(10, 3));
*/?>

<!--<p>PHP 赋值运算符</p>
--><?php
/*    $x=10;
    echo $x; // 输出10
    echo "<br>";

    $y=20;
    $y += 100;
    $y += 100;
    echo $y; // 输出120
    echo "<br>";

    $z=50;
    $z -= 25;
    echo $z; // 输出25
    echo "<br>";

    $i=5;
    $i *= 6;
    echo $i; // 输出30
    echo "<br>";

    $j=10;
    $j /= 5;
    echo $j; // 输出2
    echo "<br>";

    $k=15;
    $k %= 4;
    echo $k; // 输出3
*/?>

<!--<p>使用不同字符串运算符得到的相同结果</p>
--><?php
/*    $a = "Hello";
    $b = $a . " world!";
    echo $b; // 输出Hello world!
    echo "<br>";

    $x="Hello";
    $x .= " world!";
    echo $x; // 输出Hello world!
*/?>

<!--<p>PHP 递增/递减运算符</p>
--><?php
/*    $x=10;
    echo ++$x; // 输出11
    $y=10;
    echo $y++; // 输出10
    $z=5;
    echo --$z; // 输出4
    $i=5;
    echo $i--; // 输出5
*/?>

<!--<p>使用一些比较运算符得到的不同结果</p>
--><?php
/*$x=100;
$y="100";

var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x !== $y);
echo "<br>";

$a=50;
$b=90;

var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
*/?>

<!--<p>PHP 数组运算符</p>
--><?php
/*    $x = array("a" => "red", "b" => "green");
    $y = array("c" => "blue", "d" => "yellow");
    $z = $x + $y; // $x 和 $y 数组合并
    var_dump($z);
    var_dump($x == $y);
    var_dump($x === $y);
    var_dump($x != $y);
    var_dump($x <> $y);
    var_dump($x !== $y);
*/?>

<p>三元运算符</p>
<?php
$test = '菜鸟教程';
// 普通写法
$username = isset($test) ? $test : 'nobody';
echo $username;

echo "<br>";

// PHP 5.3+ 版本写法
/*$username = $test ?: 'nobody';
echo $username;
*/?><!--

--><?php
/*// 如果 $_GET['user'] 不存在返回 'nobody'，否则返回 $_GET['user'] 的值
$username = $_GET['user'] ?? 'nobody';
// 类似的三元运算符
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';
*/?>

<!--<p>组合比较符(PHP7+)</p>
--><?php
/*// 整型
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1

// 浮点型
echo 1.5 <=> 1.5; // 0
echo 1.5 <=> 2.5; // -1
echo 2.5 <=> 1.5; // 1

// 字符串
echo "a" <=> "a"; // 0
echo "a" <=> "b"; // -1
echo "b" <=> "a"; // 1
*/?>

<!--<p>运算符优先级</p>
--><?php
/*    // 优先级： &&  >  =  >  and
    // 优先级： ||  >  =  >  or

    $a = 3;
    $b = false;
    $c = $a or $b;
    var_dump($c);          // 这里的 $c 为 int 值3，而不是 boolean 值 true
    $d = $a || $b;
    var_dump($d);          //这里的 $d 就是 boolean 值 true
*/?>

<p>括号的使用</p>
<?php
// 括号优先运算
$a = 1;
$b = 2;
$c = 3;
$d = $a + $b * $c;
echo $d;
echo "<br>";
$e = ($a + $b) * $c;  // 使用括号
echo $e;
?>














