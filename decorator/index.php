<?php
require_once('ConcreteComponent.php');
require_once('ConcreteDecorator_1.php');
require_once('ConcreteDecorator_2.php');
$compo_obj = new ConcreteComponent();
$compo_obj->setText("abcde");
// 大文字に変換する
$deco_objA = new ConcreteDecoratorA($compo_obj);
echo $deco_objA->getText() . "<br>";
// アスタリスクを付ける
$deco_objB = new ConcreteDecoratorB($compo_obj);
echo $deco_objB->getText() . "<br>";
// 大文字に変換し、かつアスタリスクを付ける
$deco_objAB = new ConcreteDecoratorB(new ConcreteDecoratorA($compo_obj));
echo $deco_objAB->getText() . "<br>";
?>
