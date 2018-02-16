<?php
require_once('Decorator.php');
class ConcreteDecoratorA extends Decorator {
    public function __construct(Component $compo) {
        parent::__construct($compo);
    }

    // 小文字を大文字に変換して返す
    public function getText() {
        $text = parent::getText();
        return strtoupper($text);
    }
}
?>
