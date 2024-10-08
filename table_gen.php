<?php

$row_num = $_GET['row_num'];
$col_num = $_GET['col_num'];
$gender = $_GET['gender'];
$dept = $_GET['dept'];
$msg = $_GET['message'];


echo '表格大小'.$col_num.'行,'.$row_num.'列<br/>';
echo '填表人性別'.$gender.'<br/>';
echo '科系'.$dept.'<br/>';
echo '留言'.$msg.'<br/>';

echo '<table border="1">';

for ($i = 0; $i < $col_num; $i++) {
    echo '<tr>';
    for ($j = 0; $j < $row_num; $j++) {
        echo '<td>'.($i+1).'行,'.($j+1).'列</td>';
    }
    echo '</tr>';
}

echo '</table>';

?>