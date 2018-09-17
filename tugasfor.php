<!-- M. Imam Pratama -->

<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

li {
    float: left;
    margin: 1px;
    width: 35px;
	height: 27px;
    border: 1px solid green;
    background-color: orange;
    text-align: center;
    padding-top: 8px;
}

</style>
</head>
<body>

<?php

function suatuFungsi($n) {
    for ($i=1; $i <= $n; $i++) { 
        echo "<ul>";
        $k = $i;
        for ($j=1; $j <= $i; $j++) { 
            echo "<li>$k</li>";
            $k += $n-$j;
        }
        echo "</ul>";
    }
    echo "<br>";
}

suatuFungsi(5);
suatuFungsi(8);
suatuFungsi(10);
suatuFungsi(14);

?>

</body>
</html>