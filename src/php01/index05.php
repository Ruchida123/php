<?php

for ($i = 1; $i < 6; $i++) {
  echo $i * 2;
  echo "<br />";
}

echo "<br />";
echo "<br />";

$count = 0;

while ($count < 100) {
  $count += 1;
  if ($count === 20) {
    break;
  }
  if ($count % 3 === 0) {
    continue;
  }
  echo $count.'<br />';
}

echo "<br />";
echo "<br />";

$num =0;

do {
    echo "num = " . $num . "<br />";
    $num ++;
} while ($num < 3);


echo "<br />";
echo "<br />";


for ($i = 1; $i < 51; $i++) {
  $fizz = ($i % 3 === 0);
  $buzz = ($i % 5 === 0);
  if ($fizz && $buzz) {
    echo "FizzBuzz";
  } elseif ($fizz) {
    echo "Fizz";
  } elseif ($buzz) {
    echo "Buzz";
  } else {
    echo $i;
  }
  echo "<br />";
}

echo "<br />";
echo "<br />";

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo "●";
    }
    echo "<br />";
}