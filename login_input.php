<?php require 'header.php'; ?>
<form action="login_output.php" method="post">
    <p >メールアドレス　　　<input type="text" name="login"><br></p>
    <p >_____________________________________</p>
    <p >パスワード　　　<input type="password" name="password"><br></p>
    <p >_____________________________________</p>
    <button type="submit">ログイン</button>
</form>

<p>初めての方はこちらから</p>
<a href="customer_input.php"><button>新規登録</button></a>
</div>
<?php require 'footer.php'; ?>    