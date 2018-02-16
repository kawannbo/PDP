<?php
require_once('Decorator.php');
class ConcreteDecoratorB extends Decorator {
    public function __construct(Component $compo) {
        parent::__construct($compo);
    }

    // アスタリスクを前後に付けて返す
    public function getText() {
        $text = parent::getText();
        return "*". ($text) ."*";
    }
}
?>
