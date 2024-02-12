<?php
function text($score1, $score2, $score3)
{
  $total = $score1 + $score2 + $score3;
  if ($total > 210) {
    echo "合計点は " . $total . " なので合格です";
  } else {
    echo "合計点は " . $total . " なので不合格です";
  }
}

text(70, 70, 71);

echo "<br />";
echo "<br />";

function triangle($bottom, $height)
{
  $total = $bottom * $height / 2;
  
  return $total;
}

function square($bottom, $height)
{
  $total = $bottom * $height;
  
  return $total;
}

function trapezoid($upperBottom, $bottom, $height)
{
  $total = ($upperBottom + $bottom) * $height / 2;
  
  return $total;
}

echo triangle(10, 5);
echo "<br />";
echo square(10, 5);
echo "<br />";
echo trapezoid(4, 10, 5);