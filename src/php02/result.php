<?php
require_once('functions/search_city_time.php');
$tokyo = searchCityTime('東京');
$option = $_POST['country'];
$comparison = searchCityTime($option);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>
<body>
    <header  class="header">
        <div class="header__inner">
            <a href="" class="header__logo">World Clock</a>
        </div>
    </header>
    <main>
      <div class="cards">
        <div class="card">
          <img src="img/<?php echo($tokyo['img']) ?>" alt="国旗" class="card__img">
          <div class="card__area-time">
            <div class="card__area"><?php echo($tokyo['name']) ?></div>
            <div class="card__time"><?php echo($tokyo['time']) ?></div>
          </div>
        </div>
        <div class="card">
          <img src="img/<?php echo($comparison['img']) ?>" alt="国旗" class="card__img">
          <div class="card__area-time">
            <div class="card__area"><?php echo($comparison['name']) ?></div>
            <div class="card__time"><?php echo($comparison['time']) ?></div>
          </div>
        </div>
      </div>
    </main>
</body>
</html>