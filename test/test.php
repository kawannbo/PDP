<?php

class Test
{

  static $hoge = "cccc";


    static public function getNew()
    {
      echo "aaaaa/";
      echo self::$hoge;
    }
}

class Child extends Test
{
}

Child::getNew();
