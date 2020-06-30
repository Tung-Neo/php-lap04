<?php
$sal = $_GET['sal'];
echo "Total Sales: $$sal <br>";
if ($sal > 50000)
{
    $comm = $sal * .10;
    echo "Commission: $comm <br>";
}
else if ($sal > 20000 and $sal <= 50000)
{
    $comm = $sal * .07;
    echo "Commission: $$comm <br>";
}
else if ($sal < 20000)
{
    $comm = $sal * .05;
    echo "Commission: $$comm <br>";
}
?>