<?php
    if(isset($_POST)) {
        $summ1 = $_POST["summ1"];
        $summAdd = $_POST["summAdd"];
        $daysN = $_POST["daysN"];
        $makeSumm = $_POST["makeSumm"];
        $years = (int)$_POST["years"];

        $daysY = 365;
        $percent = 10;

        $result = 0;

        for($i = 0; $i < $years; $i++) {
            if($makeSumm == "true") {
                $result += $summ1 + ($summ1 + $summAdd) * $daysN * ($percent / $daysY);
            }
            else {
                $result += $summ1 + $summ1 * $daysN * ($percent / $daysY);
            }
        }

        echo $result;
    }
?>