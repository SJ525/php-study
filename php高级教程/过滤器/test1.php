<!--在下面的实例中，我们用 filter_var() 函数验证了一个整数-->
<?php
$int = 123;

if(!filter_var($int, FILTER_VALIDATE_INT))
{
    echo("不是一个合法的整数");
}
else
{
    echo("是个合法的整数");
}
?>