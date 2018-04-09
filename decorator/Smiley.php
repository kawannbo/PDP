<?php
require_once('Component.php');

class Smiley implements Component {
    private $emotion = null;

    public function getEmotion() {
        return $this->emotion;
    }

    public function setEmotion($emotion) {
        $this->emotion = $emotion;
    }
}
?>
