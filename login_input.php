<?php require 'header.php'; ?>
<table id="cate" align="center">
<form action="Top.php" method="post">
    <tr><td><h1>チャイニーズドラゴン</h1></td></tr>
    <tr><td>メールアドレス　　　<input type="text" name="login"></td></tr>
    <tr><td>_____________________________________</td></tr>
    <tr><td>パスワード　　　　　<input type="password" name="password"></td></tr>
    <tr><td>_____________________________________</td></tr>
    <tr><td><div align="center"><button type="submit">ログイン</button></div></td></tr>
</form>
<tr><td><div align="center"><a href="customer_input.php"><button>新規登録</button></a></dev></td></tr>
<tr><td><div align="center"><a href="Top.php?gest=gest"><button>ゲストログイン</button></a></div></td></tr>
<?php require 'footer.php'; ?>    