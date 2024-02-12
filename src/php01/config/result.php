<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
print "私の名前は、" . $name . "<br />";
$product = htmlspecialchars($_POST['product'], ENT_QUOTES);
print "ご希望の商品は、" . $product . "<br />";
$order = htmlspecialchars($_POST['order'], ENT_QUOTES);
print "注文数は、" . $order . "<br />";