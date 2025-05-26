<?php
require('config/status_codes.php');

//4つの選択肢をランダムに取り出す
$rand = array_rand($status_codes, 4);
$randomnum = array_rand($rand);
$n = $rand[$randomnum];
$answer = $status_codes[$n];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header class="header">
        <h2 class="header__title">Status Code Quiz</h2>
    </header>
    <main>
        <div class="main">
        <div class="content">
                <div class="content__question">
                    <div class="content__question-statement"> Q.以下の内容に当てはまるステータスコードを選んでください</div>
                    <div class="content__question-description"><?php  echo($answer['description']) ?></div>
                </div>
                <form action="result.php" class="content__form" method="post">
                    <input type="hidden" name = "answer_code" value="<?php echo($answer['code']); ?>">
                    <input type="hidden" name = "answer_description" value="<?php echo($answer['description']); ?>">
                    <?php foreach($rand as $option): ?>
                    <div class="content__form--options">
                            <input type="radio" name="option" id="<?php echo($status_codes[$option]['code']); ?>" value="<?php echo($status_codes[$option]['code']); ?>" class="content__form--option-input">
                            <label for="<?php echo($status_codes[$option]['code']); ?>" class="content__form--option-label"><?php echo($status_codes[$option]['code']); ?></label>       
                    </div>
                    <?php endforeach; ?>
                <div class="content__submit">
                    <button class="content__submit--button" type="submit">
                        回答
                    </button>
                </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>