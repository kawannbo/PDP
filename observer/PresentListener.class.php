<?php
require_once 'CartListener.class.php';

/**
 * ConcreteObserverクラスに相当する
 */
class PresentListener implements CartListener
{

    private static $PRESENT_TARGET_ITEM = '30:クッキーセット';
    private static $PRESENT_ITEM = '99:プレゼント';

    public function __construct()
    {
    }

    public function update(Cart $cart)
    {
      echo "";
    }
}
