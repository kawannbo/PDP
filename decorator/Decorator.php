<?php
require_once('Component.php');
abstract class Decorator implements Component {
    private $compo;

    public function __construct(Component $compo) {
        $this->compo = $compo;
    }

    public function getEmotion() {
        return $this->compo->getEmotion();
    }

    public function getComponent() {
      return get_class($this->compo);
    }

    public function setEmotion($emotion) {
        $this->compo->setEmotion($emotion);
    }

    // コンポーネント名を返す
    public function getClassName() {
        echo get_class($this) , "\n";
    }
}
?>
