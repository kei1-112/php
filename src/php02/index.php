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
    <header  class="header">
        <div class="header__inner">
            <a href="" class="header__logo">World Clock</a>
        </div>
    </header>
    <main>
        <div class="main">
            <div class="main__title">
                日本と世界の時間を比較
            </div>
            <form action="/php02/result.php" class="search__form" method="post">
                <select class="search__form--option" name="country" id="">
                    <option value="シドニー">シドニー</option>
                    <option value="上海">上海</option>
                    <option value="ヨハネスブルグ">ヨハネスブルグ</option>
                    <option value="モスクワ">モスクワ</option>
                    <option value="ロンドン">ロンドン</option>
                    <option value="ニューヨーク">ニューヨーク</option>
                </select>
                <button class="search__form--search-button">検索</button>
            </form>
        </div>
    </main>
</body>
</html>