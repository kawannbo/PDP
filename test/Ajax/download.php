<?php
    header('Content-type: text/plain; charset= UTF-8');
    if(isset($_POST['hostname']) && isset($_POST['passward'])){
        $hostname = $_POST['hostname'];
        $username = $_POST['username'];
        $pas = $_POST['passward'];
        $portnum = $_POST['portnum'];
        
        $str = "AJAX REQUEST SUCCESS\
        hostname:".$hostname."\n
        username:".$username."\n
        passward:".$pas."\n
        portnum:".$portnum."\n

        ";
        $result = nl2br($str);
        echo $result;
        $output = shell_exec('sudo -u kawano /var/www/html/shell/shell/dw_rsync.sh "'.$hostname.'" "'.$username.'" "'.$pas.'" "'.$portnum.'" ');
        echo $output;

    }else{
        echo 'FAIL TO AJAX REQUEST';
    }
?>
