<p>区分大小写的常量</p>
<?php
/*    // 区分大小写的常量名
    define("GREETING", "欢迎访问 Runoob.com");
    echo GREETING;    // 输出 "欢迎访问 Runoob.com"
    echo '<br>';
    echo greeting;   // 输出 "greeting"
*/?>

<p></p>
<?php
    // 不区分大小写的常量名
    define("GREETING", "欢迎访问Runoob.com", true);
    echo greeting;  // 输出 "欢迎访问Runoob.com"
?>