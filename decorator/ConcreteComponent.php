<?php
require_once('Component.php');
class ConcreteComponent implements Component {
    private $text = null;

    public function getText() {
        return $this->text;
    }

    public function setText($text) {
        $this->text = $text;
    }
}
?>
