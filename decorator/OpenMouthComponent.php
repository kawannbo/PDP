<?php
require_once('Decorator.php');
class OpenMouthComponent extends Decorator {

    // 小文字を大文字に変換して返す
    public function getEmotion() {
        $emotion = parent::getEmotion();
        return strtoupper($emotion);
    }

}
?>
