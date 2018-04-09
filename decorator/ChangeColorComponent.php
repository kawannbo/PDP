<?php
require_once('Decorator.php');
class ChangeColorComponent extends Decorator {
    public function getEmotion() {
        $emotion = parent::getEmotion();
        $emotion="<FONT COLOR=\"BLUE\">".$emotion."</FONT>";
        return $emotion;
    }

}
?>
