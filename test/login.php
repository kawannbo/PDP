<?php

// セッション開始
session_start();

$loginId = $_POST["login_id"]; // フォームに入力されたログインID
$loginPw = $_POST["login_pw"]; // フォームに入力されたログインパスワード

// ログインチェック（checkLogin関数の実装は省略）
// 成功するとユーザー情報が配列で返ってくるものとします
$user_data = checkLogin ($loginId, $loginPw);

// 入力されたIDとパスワードに一致するユーザーが存在する場合
if ($user_data !== False) {
    // セッションにユーザーIDを保存しておく
    $_SESSION ["user_id"] = $user_data ["user_id"];
}

// ログイン中？（セッションにユーザーIDがある？）
if (array_key_exists("user_id", $_SESSION)) {
    echo "ログインできました。ようこそ。";
}
// ログアウト中？（セッションにユーザーIDがない？）
else {
    echo "ログインしてください。";
}
