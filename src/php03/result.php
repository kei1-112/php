<?php

$answer_code = $_POST['answer_code'];
$answer_description = $_POST['answer_description'];
$option = $_POST['option'];

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
    <header class="header">
        <h2 class="header__title">Status Code Quiz</h2>
    </header>
    <main>
        <div class="result">
            <?php if($answer_code == $option): ?>
            <div class="result__ok_or_not">
                正解
            </div>
            <?php else: ?>
            <div class="result__ok_or_not">
                不正解
            </div>
            <?php endif; ?>
            <table class="answer">
                <tr>
                    <th class="table__header">ステータスコード</th>
                    <td class="table__dtl"><?php echo($answer_code) ?></td>
                </tr>
                <tr>
                    <th class="table__header">説明</th>
                    <td class="table__dtl"><?php echo($answer_description) ?></td>
                </tr>
            </table>
        </div>
    </main>
</body>
</html>