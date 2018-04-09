<?php
require_once('Decorator.php');
class AddHandsComponent extends Decorator {

    // 手をつける
    public function getEmotion() {
        $emotion = parent::getEmotion();
        return "٩". ($emotion) ."ノ";
    }

}
?>
