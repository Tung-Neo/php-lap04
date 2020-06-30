<?php
    $sal = $_GET['sal'];
    echo "Salary before bonus: $$sal <br>";
    if ($sal > 850)
    {
        $bonus = $sal * 0.1;
        echo "Bonus: $$bonus <br>";
        $sal = $sal + $bonus;
        echo "Total Salary: $$sal";
    }
?>