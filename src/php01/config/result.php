<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$item = htmlspecialchars($_POST['item'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

echo "私の名前は、" . $name;
echo '<br>';
echo "ご希望の商品は、" . $item;
echo '<br>';
echo "注文数は、" . $number;
echo '<br>';