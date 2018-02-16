<?php
require_once('Component.php');
abstract class Decorator implements Component {
    private $compo;

    public function __construct(Component $compo) {
        $this->compo = $compo;
    }

    public function getText() {
        return $this->compo->getText();
    }

    public function setText($text) {
        $this->compo->setText($text);
    }
}
?>
