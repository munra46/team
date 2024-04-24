<?php session_start(); ?>
<?php require 'header.php'; ?>
<h1>新規登録<h1>
<?php
//登録に必要な情報はまだ決めていないので仮入力
$name=$address=$post=$useraddress=$password='';
if (isset($_SESSION['customer'])){
    $name=$_SESSION['customer']['name'];
    $post=$_SESSION['customer']['post'];
    $address=$_SESSION['customer']['address'];
    $useraddress=$_SESSION['customer']['useraddress'];
    $password=$_SESSION['customer']['password'];
}
    echo'<form action="customer_output.php" method="post">';
    echo'<table align="center">';
    echo'<tr><td>ユーザー名</td><td>';
    echo'<p>','<input type="text" placeholder="必須項目です" align="center" name="name" value="',$name,'"required>','</p>';
    echo'</td></tr>';
    echo'<tr><td>メールアドレス</td><td>';
    echo'<p>','<input type="text" placeholder="必須項目です"  name="address" value="',$address,'"required>','</p>';
    echo'</td></tr>';
    echo'<tr><td>パスワード</td><td>';
    echo'<p>','<input type="password" placeholder="必須項目です"  name="password" value="',$password,'"required>','</p>';
    echo'</td></tr>';
    echo'<tr><td>郵便番号</td><td>';
    echo'<p>','<input type="text" placeholder="必須項目です"  name="post" value="',$post,'"required>','</p>';
    echo'</td></tr>';
    echo'<tr><td>住所</td><td>';
    echo'<p>','<input type="text" placeholder="必須項目です"  name="useraddress" value="',$useraddress,'"required>','</p>';
    echo'</td></tr>';
    echo '</table>';

    echo '<table align="center">';
    echo'<tr><td>';
    echo'<p align="center">','<input type="submit" value="登録">','</p>';
    echo'</form>';
    echo'</td></tr>';
    echo'<tr><td>';
    echo '<a href="login_input.php">ログイン画面へ戻る</a>';
    echo'</td></tr>';
    ?>
    </table>
<?php require 'footer.php'; ?>