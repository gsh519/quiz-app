<?php

$error = [];

$submit = $_POST['btn_submit'];

function checkStr($str)
{
  if (empty($str)) {
    $error[] = '文字を入力してください';
  }

  return $error;
}

if (!empty($submit)) {
  //バリデーション
  $question =  preg_replace('/\A[\p{C}\p{Z}]++|[\p{C}\p{Z}]++\z/u', '', $_POST['question']);
  $answer =  preg_replace('/\A[\p{C}\p{Z}]++|[\p{C}\p{Z}]++\z/u', '', $_POST['answer']);
  $hint_1 =  preg_replace('/\A[\p{C}\p{Z}]++|[\p{C}\p{Z}]++\z/u', '', $_POST['hint_1']);
  $hint_2 =  preg_replace('/\A[\p{C}\p{Z}]++|[\p{C}\p{Z}]++\z/u', '', $_POST['hint_2']);
  $hint_3 =  preg_replace('/\A[\p{C}\p{Z}]++|[\p{C}\p{Z}]++\z/u', '', $_POST['hint_3']);

  checkStr($question);
  checkStr($answer);
  checkStr($hint_1);
  checkStr($hint_2);
  checkStr($hint_3);

  echo "こんにちは";

  var_dump($error);
}
