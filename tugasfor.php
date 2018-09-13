<!-- M. Imam Pratama -->
<?php

function suatuFungsi($n) {
    for ($i=1; $i <= $n; $i++) { 
        $k = $i;
        for ($j=1; $j <= $i; $j++) { 
            echo "$k&nbsp;&nbsp;&nbsp;";
            $k += $n-$j;
        }
        echo "<br>";
    }
    echo "<br>";
}

suatuFungsi(5);
suatuFungsi(8);
suatuFungsi(10);
suatuFungsi(14);

?>
