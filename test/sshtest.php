<?php
echo "SSH TEST";
$connection = ssh2_connect('27.133.153.94', 49513, array('hostkey'=>'ssh-rsa'));

/**
 * 公開鍵・秘密鍵の読込権限に注意
 */
if (!ssh2_auth_pubkey_file($connection, 'somebody',
                          '/Users/kawanotaichi/.ssh/sakura_rsa.pub',
                          '/Users/kawanotaichi/.ssh/sakura_rsa',
                          'passphrase')) {
    die('認証失敗');
}
echo "認証成功" . PHP_EOL;
