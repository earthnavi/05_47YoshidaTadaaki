<?php
    $myfile = fopen("./data/data.csv", "r");
    // Output one line until end-of-file
    echo "<table>";
    while(!feof($myfile)) {
        $string = fgets($myfile);
        $delimiter = ",";
        $array = explode ($delimiter, $string, $limit = 3);
        echo "<tr><td>".$array[0]."</td><td>".$array[1]."</td><td>".$array[2]."</td></tr>";
    }
    echo "</table>";
    
    fclose($myfile);
?>