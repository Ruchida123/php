<?php
$a = 7;

if ($a === 5) {
    echo "\$aは5です";
} elseif ($a === 7) {
    echo "\$aは7です";
} else {
    echo "\$aは5以外です";
}
echo "<br/ >";
echo "<br/ >";
$people = "Saburo";

switch ($people){
    case "Saburo":
        echo "三郎です";
}

echo "<br/ >";
echo "<br/ >";

$result = ($a === 7) ? "TRUE" : "FALSE";
echo $result;