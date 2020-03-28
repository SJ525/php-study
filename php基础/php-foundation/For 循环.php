<p>for 循环</p>
<?php
for ($i=1; $i<=5; $i++)
{
    echo "The number is " . $i . "<br>";
}
?>

<div>
    <p>foreach 循环</p>
    <p>foreach 循环用于遍历数组。</p>
</div>
<?php
$x=array("one","two","three");
foreach ($x as $value)
{
    echo $value . "<br>";
}
?>
