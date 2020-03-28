<!--<p>
    下面的实例首先设置变量 i 的值为 1 ($i=1;)。
    然后，只要 i 小于或者等于 5，while 循环将继续运行。循环每运行一次，i 就会递增 1：
</p>
<html>
<body>
    <?php
/*    $i=1;
    while($i<=5)
    {
        echo "The number is " . $i . "<br>";
        $i++;
    }
    */?>
</body>
</html>-->

<p>do...while 语句</p>
<html>
<body>
<?php
$i=1;
do
{
    $i++;
    echo "The number is " . $i . "<br>";
}
while ($i<=5);
?>
</body>
</html>
