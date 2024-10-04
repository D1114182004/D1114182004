<?php

$row_num = $_GET['row_num'];
$col_num = $_GET['col_num'];


echo '表格大小'.$row_num.'列,'.$col_num.'行';

echo '<table border="1">';

for ($i = 0; $i < $row_num; $i++) {
    echo '<tr>';
    for ($j = 0; $j < $col_num; $j++) {
        echo '<td>'.($i+1).'列,'.($j+1).'行</td>';
    }
    echo '</tr>';
}

echo '</table>';

?>