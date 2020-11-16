<?php

$i = 1;
echo "<table>";
for( ; ;){
    if($i >= 7){
        break;
    }
    else{
        echo "<tr><td>$i</td></tr>";
    }
    $i++;
}
echo "</table>";


?>
<style>
tr{
    margin: 0px;
    padding: 0px;
}

td{
    margin: 0px;

    padding: 3px 15px;
    font-size: 1.4rem;
    border: 1px solid black;
}
table {
    padding: 0px;

    border: 2px solid black;
}
</style>