<?php

// 値渡し
function func_atai_watashi($value) {
    $value = "値渡しされた";
    echo "func_atai_watashiの関数の中のvalue : {$value}<br/>";
}
// 参照渡し
function func_sansyo_watashi(&$value) {
    $value = "参照渡しされた";
    echo "func_sansyo_watashiの関数の中のvalue : {$value}<br/>";
}

$value = "٩( ᐛ )و";
echo "関数に入れる前の値: {$value}<br/>";
echo '<br/>';

func_atai_watashi($value);
echo "func_atai_watashiに渡した後の値 : {$value}<br/>";
func_sansyo_watashi($value);
echo "func_sansyo_watashiに渡した後の値 : {$value}<br/>";


setcookie("access_count", 0);

// クッキーを取得する
// 名前：access_count
$count = $_COOKIE["access_count"] + 1;

echo $count . "回目のアクセスありがとうございます。";

// クッキーを保存する
// 名前：access_count
// データ：現在値+1
setcookie("access_count", $count + 1);
