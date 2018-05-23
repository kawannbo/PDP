<?php
    header('Content-type: text/plain; charset= UTF-8');
    if(isset($_POST['hostname']) && isset($_POST['passward'])){
        $hostname = $_POST['hostname'];
        $username = $_POST['username'];
        $pas = $_POST['passward'];
        $portnum = $_POST['portnum'];
        $bkpath = $_POST['bkpath'];
        
        $str = "AJAX REQUEST SUCCESS\
        hostname:".$hostname."\n
        username:".$username."\n
        passward:".$pas."\n
        portnum:".$portnum."\n
        bkpath:".$bkpath."\n
        ";
        $result = nl2br($str);
        echo $result;

        $output = shell_exec("/var/www/html/PDP/test/bk_project.sh");
        $output = shell_exec('/var/www/html/PDP/test/bk_project.sh "'.$hostname.'" "'.$username.'" "'.$pas.'" "'.$portnum.'" "'.$bkpath.'"');
        echo $output;

    }else{
        echo 'FAIL TO AJAX REQUEST';
    }
?>