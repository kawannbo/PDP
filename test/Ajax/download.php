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
echo "完了"; 
$te = shell_exec("/var/www/html/shell/shell/dfh.sh");
       // $output = shell_exec("/var/www/html/shell/shell/dw_rsync.sh");
        //$output = shell_exec('/var/www/html/shell/shell/dw_rsync.sh "'.$hostname.'" "'.$username.'" "'.$pas.'" "'.$portnum.'" "'.$bkpath.'"');
        echo $te;
	echo "完了";

    }else{
        echo 'FAIL TO AJAX REQUEST';
    }
?>
