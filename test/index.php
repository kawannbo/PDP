
<!DOCTYPE html>
<html lang="ja">
<link rel="stylesheet" type="text/css" href="style.css">
<head>
    <meta charset="UTF-8">
    <title>代々木ヒルズ〜河野白書〜</title>
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <h2>ファイル、ディレクトリの自動バックアップ設定</h2>
    <form id="form_1" method="post" accept-charset="utf-8" return false>
    <ul>
        <li class="hostname">
            <label for="hostname">ホスト名もしくはIPアドレス</label>
            <input type="text" name = "hostname" id ="hostname" placeholder="バックアップ先のホスト名いれてね" size="30">
        </li>

        <li class="username">
            <label for="username">ユーザ名</label>
            <input type="text" name = "username" id="username" placeholder="バックアップ先のユーザ名いれてね" size="30">
        </li>

         <li class="passward">
            <label for="passward">パスワード</label>
            <input type="text" name = "passward" id="passward" placeholder="バックアップ先のパスワードいれてね" size="30">
        </li>

        <li class="portnum">
            <label for="portnum">ポート番号 </label>
            <input type="text" name = "portnum" id="portnum" placeholder="指定なければ未記入でいいんだ" size="30">
        </li>
        
        <li class="bkpath">
            <label for="bkpath">バックアップ先のパス </label>
            <input type="text" name = "bkpath" id="bkpath" placeholder="指定なければ未記入でいいんだ" size="30">
        </li>

    </ul>
    
            <button class="square_btn"　id="ajax">これで設定すんねや</button>
    </form>
    

    <div class="result"></div>

    <script type="text/javascript">

        $(function(){
            // Ajax button click
            $('#ajax').on('click',function(){
                $.ajax({
                    url:'./request.php',
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
</body>
</html>

