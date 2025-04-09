<?php
function ucgenCiz($satirSayisi) {
    $i = 1;
    while ($i <= $satirSayisi) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>"; // Yeni satıra geç
        $i++;
    }
}

ucgenCiz(5);
?>
