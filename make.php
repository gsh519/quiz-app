<?php
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>なぞなぞ作成ページ</title>
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>

<body>
  <main>
    <div class="wrapper">
      <h1 class="make-title">なぞなぞを作る</h1>
      <div class="make-area">
        <form action="./create.php" method="post">
          <div class="question">
            <textarea name="question" id="question" placeholder="パンはパンでも食べられないパンってなーんだ"></textarea>
            <label class="question" for="question">なぞなぞ問題</label>
          </div>
          <div class="answer">
            <input class="input" type="text" id="answer" name="answer" placeholder="答え">
          </div>
          <div class="hint">
            <input class="input" type="text" id="hint_1" name="hint_1" placeholder="ヒント1">
          </div>
          <div class="hint">
            <input class="input" type="text" id="hint_2" name="hint_2" placeholder="ヒント2">
          </div>
          <div class="hint">
            <input class="input" type="text" id="hint_3" name="hint_3" placeholder="ヒント3">
          </div>

          <div class="submit">
            <input type="submit" id="btn_submit" name="btn_submit" value="なぞなぞ作成">
          </div>
        </form>
      </div>
    </div>
  </main>
</body>

</html>
