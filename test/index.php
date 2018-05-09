
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <form id="form_1" method="post" accept-charset="utf-8" return false>
        <p>ホスト名もしくはIPアドレス <input type="text" name = "userid" id ="userid"> </p>
        <p>ユーザ名 <input type="text" name = "username" id="username"> </p>
        <p>パスワード <input type="text" name = "passward" id="passward"> </p>
        <p>ポート番号 <input type="text" name = "portnum" id="portnum"> </p>
    </form>

    <form id="db_bk" method="post" accept-charset="utf-8" return false>
        <p>DB名 <input type="text" name = "dbname" id ="dbname"> </p>
        <p>ユーザ名 <input type="text" name = "dbusername" id="dbusername"> </p>
        <p>パスワード <input type="text" name = "dbpassward" id="dbpassward"> </p>
    </form>

    <button id="ajax">ajax</button>
    <div class="result"></div>

    <script type="text/javascript">

        $(function(){
            // Ajax button click
            $('#ajax').on('click',function(){
                $.ajax({
                    url:'./request.php',
                    type:'POST',
                    data:{
                        'userid':$('#userid').val(),
                        'passward':$('#passward').val()
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
</body>
</html>

<?php
$output = shell_exec("~/Documents/bashProject/projectBK.sh");
echo $output;