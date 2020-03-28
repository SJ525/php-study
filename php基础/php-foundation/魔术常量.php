<!--<p>__LINE__</p>
<?php
/*echo '这是第 " '  . __LINE__ . ' " 行';
*/?>

<p>__FILE__</p>
<?php
/*echo '该文件位于 " '  . __FILE__ . ' " ';
*/?>

<p>__FUNCTION__</p>
<?php
/*function test() {
    echo  '函数名为：' . __FUNCTION__ ;
}
test();
*/?>

<p>__CLASS__</p>
--><?php
/*class test {
    function _print() {
        echo '类名为：'  . __CLASS__ . "<br>";
        echo  '函数名为：' . __FUNCTION__ ;
    }
}
$t = new test();
$t->_print();
*/?>

<!--<p>__TRAIT__</p>
--><?php
/*class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
}

class MyHelloWorld extends Base {
    use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();
*/?>
