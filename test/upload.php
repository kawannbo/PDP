
<!DOCTYPE html>
<html lang="ja">
<link rel="stylesheet" type="text/css" href="css/upload.css">
<link rel="shortcut icon" href="./favicon.ico" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <title>代々木ヒルズ〜河野白書〜</title>
</head>

<header>
        <h1 id="title"> 
            <a href="#">
                <i class="fas fa-feather"></i>
                    Upload Data
                <i class="fas fa-feather"></i>
            </a>
        </h1>
    <div class="icons">
        <a href="index.php"><i class="fas fa-wrench"></i></a>
        <a href="upload.php"><i class="fas fa-cloud-upload-alt"></i></a>
        <a href="download.php"><i class="fas fa-cloud-download-alt"></i></a>
        <a href="https://spdev.work/backup/" target="_blank"><i class="fas fa-folder-open"></i></a>
    </div>
</header>

<body>
    <?php $output = shell_exec("/var/www/html/shell/shell/dfh.sh"); ?>
    <form id="form_1" method="post" accept-charset="utf-8" return false>
    <div class="inputtext">
        <ul>
            <li class="hostname">
                <label for="hostname">ホスト名もしくはIPアドレス</label>
                <input type="text" name = "hostname" id ="hostname" placeholder="バックアップ先のホスト名いれてね" size="40">
            </li>

            <li class="username">
                <label for="username">ユーザ名</label>
                <input type="text" name = "username" id="username" placeholder="バックアップ先のユーザ名いれてね" size="40">
            </li>

            <li class="passward">
                <label for="passward">パスワード</label>
                <input type="text" name = "passward" id="passward" placeholder="バックアップ先のパスワードいれてね" size="40">
            </li>

            <li class="portnum">
                <label for="portnum">ポート番号 </label>
                <input type="text" name = "portnum" id="portnum" placeholder="指定なければ22でいいんだ" size="40">
            </li>
            
            <li class="bkpath">
                <label for="bkpath">アップロードするフォルダ </label>
                <input type="text" name = "bkpath" id="bkpath" placeholder="記入漏れしないでね" size="40">
            </li>

            <li class="bkpath">
                <label for="bkpath">アップロード先のパス </label>
                <input type="text" name = "bkpath" id="bkpath" placeholder="チェックプログラムないから気をつけて" size="40">
            </li>
        </ul>
    </div>
    </form>

    <button class="square_btn" id="ajax">
        <i class="fas fa-cloud-upload-alt"></i> <span>  Upload</span>    
    </button>

    <div class="result"></div>

    <script type="text/javascript">

        $(function(){
            // Ajax button click
            $('#ajax').on('click',function(){
                $.ajax({
                    url:'./Ajax/upload.php',
                    type:'POST',
                    data:{
                        'hostname':$('#hostname').val(),
                        'username':$('#username').val(),
                        'passward':$('#passward').val(),
                        'portnum':$('#portnum').val(),
                        'bkpath':$('#bkpath').val(),
                    }
                })
                // Ajaxリクエストが成功した時発動
                .done( (data) => {
                    $('.result').html(data);
                    console.log(data);
                })
                // Ajaxリクエストが失敗した時発動
                .fail( (data) => {
                    $('.result').html(data);
                    console.log(data);
                })
                // Ajaxリクエストが成功・失敗どちらでも発動
                .always( (data) => {

                });
            });
        });

    </script>

    <footer>
        <p id="copyright">
            &copy;  Copyright 2018 KAWANO UNIVERSE. All Rights Reserved.
        
            <a href="#"><i class="fas fa-battery-three-quarters"></i> <?php echo $output.'%'; ?></a>
        </p>
    </footer>    
</body>
</html>

