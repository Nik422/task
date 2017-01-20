<?php
$color = $_POST['color'];
$c = 1;
echo '<table border="1">';
    for ($tr=1; $tr<=$_POST['cols']; $tr++){
        echo '<tr>';
            for ($td=1; $td<=$_POST['rows']; $td++){
                if ($c == 4){
                    $c = 1;
                }

                if ($c == 1){
                    echo '<td style="background-color: white" height="50px" width="50px">';

                    echo '</td>';
                }
                if ($c == 2){
                    echo '<td style="background-color: black" height="50px" width="50px">';

                    echo '</td>';
                }
                if ($c == 3){
                    echo '<td style="background-color: '.$color.'" height="50px" width="50px">';

                    echo '</td>';
                }

                $c++;
            }
        echo '</tr>';
    }
echo '</table>';