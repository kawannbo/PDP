<?php
include("./test.php");

interface Subject {
    public function request($number);
}

class RealSubject implements Subject {
    public function request($number) {
        echo $number ." : Requested<br>";
    }
}

class Proxy implements Subject {
    private $subject;
     public function __construct(Subject $subject) {
        $this->subject = $subject;
     }
     
     public function request($number) {
        // 偶数の時のみ処理する
        if ((int)$number % 2 == 0) {
            $this->subject->request($number);
        }
     }
}

// $subject = new RealSubject();
// $proxy = new Proxy($subject);
// doLoop($subject);
// echo "<hr>";
// // Proxyで実行する
// doLoop($proxy);

// //10回ループする
// function doLoop(Subject $subject) {
//     for ($i=0; $i<10; $i++ ) {
//         $subject->request($i);
//     }
// }

echo $i;
echo $num;