<?php
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>なぞなぞページ</title>
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script defer src="./js/script.js"></script>
</head>

<body>
  <main>
    <div class="wrapper nazo-box">
      <div class="nazo-box__frame">
        <div class="nazo-box__frame__question">サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル</div>
        <div class="nazo-box__frame__des">
          <p>作成者名</p>
          <p>2021/8/17</p>
        </div>
        <div class="nazo-box__frame__hint">
          <ul>
            <li class="hint">
              <a class="hint__toggle">ヒント1を見る</a>
              <p class="hint__txt">ヒントですヒントですヒントですヒントですヒントですヒントですヒントですヒントです</p>
            </li>

            <li class="hint">
              <a class="hint__toggle">ヒント2を見る</a>
              <p class="hint__txt">ヒントですヒントですヒントですヒントですヒントですヒントですヒントですヒントです</p>
            </li>

            <li class="hint">
              <a class="hint__toggle">ヒント3を見る</a>
              <p class="hint__txt">ヒントですヒントですヒントですヒントですヒントですヒントですヒントですヒントです</p>
            </li>
          </ul>
        </div>
        <div class="nazo-box__frame__answer">
          <ul>
            <li class="answer">
              <a class="answer__toggle">答えを見る</a>
              <p class="answer__txt">答え答え答え答え答え答え答え答え</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </main>
</body>

</html>
