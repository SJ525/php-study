<!--<p>PHP $GLOBALS</p>
--><?php
/*$x = 75;
$y = 25;

function addition()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
*/?>

<!--<p>PHP $_SERVER</p>
--><?php
/*echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
*/?>

<!--<p>PHP $_REQUEST</p>
<html>
<body>

<form method="post" action="<?php /*echo $_SERVER['PHP_SELF'];*/?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
/*$name = $_REQUEST['fname'];
echo $name;
*/?>

</body>
</html>-->

<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
$name = $_POST['fname'];
echo $name;
?>

</body>
</html>