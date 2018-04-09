<?php
require_once('Smiley.php');
require_once('OpenMouthComponent.php');
require_once('AddHandsComponent.php');
require_once('ChangeColorComponent.php');

//顔文字を生成 & セット
$compo_obj = new Smiley();
$compo_obj->setEmotion("(^o^)");

// 口を開かせる（oを大文字にしてるだけ）
$OpenMouth_obj = new OpenMouthComponent($compo_obj);
echo $OpenMouth_obj->getEmotion() . "　＜　";
// 使っているコンポーネント取得
echo $OpenMouth_obj->getClassName() . "<br>";
echo "<br>";

// 顔文字に手を付ける
$AddHands_obj = new AddHandsComponent($compo_obj);
echo $AddHands_obj->getEmotion() . "　＜　";
// 使っているコンポーネント取得
echo $AddHands_obj->getClassName() . "<br>";
echo "<br>";

// 色を変える
$ChangeColor_obj = new ChangeColorComponent($compo_obj);
echo $ChangeColor_obj->getEmotion() . "　＜　";
// 使っているコンポーネント取得
echo $ChangeColor_obj->getClassName() . "<br>";
echo "<br>";

// 口を開かせ、かつ手を付ける
$deco_obj1 = new AddHandsComponent(new OpenMouthComponent($compo_obj));
echo $deco_obj1->getEmotion() . "　＜　";
echo "口を開かせ、かつ手を付けたよ". "<br>";
echo "<br>";

// 全部のコンポーネントをつける
$deco_obj2 = new ChangeColorComponent(new AddHandsComponent(new OpenMouthComponent($compo_obj)));
echo $deco_obj2->getEmotion() . "　＜　";
echo "口を開かせ、手を付けて色も変えたよ！". "<br>";
echo "<br>";




?>
