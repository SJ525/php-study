<!--<p>PHP-if 语句</p>
--><?php
/*$t=date("H");
$date=date("yy-m-d");
echo $date;
echo "<br>";
if ($t<"20")
{
    echo "Have a good day!";
}
*/?>

<!--<p>PHP - if...else 语句</p>
--><?php
/*    $t=date("H");
    if ($t<"20")
    {
        echo "Have a good day!";
    }
    else
    {
        echo "Have a good night!";
    }
*/?>

<p>PHP - if...elseif....else 语句</p>
<?php
    $t=date("H");
    if ($t<"10")
    {
        echo "Have a good morning!";
    }
    elseif ($t<"20")
    {
        echo "Have a good day!";
    }
    else
    {
        echo "Have a good night!";
    }
?>

<?php
echo date("Y-m-d H:i:s",time()+8*3600);
?>

