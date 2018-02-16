<?php
require_once 'CartListener.class.php';

/**
 * ConcreteObserverクラスに相当する
 */
class CustomListener implements CartListener
{
    public function __construct()
    {
    }

    public function update(Cart $cart)
    {
	echo "Custom On! ";
    }
}

