<?php require 'header.php'; ?>
<?php require 'db_conect.php'; ?>
<?php
$pdo=new PDO($connect,USER,PASS);
if($_POST['word1'] == null && $_POST['word2'] == null && $_POST['word3'] == null){
echo '禁止ワードを入力してください';
}else{   
if(isset($_POST['word1'])){
$word1=$pdo->prepare('insert into ngword values(null,?)');
$word1->execute([
    $_POST['word1']
]);
}
if(isset($_POST['word2'])){
    $word2=$pdo->prepare('insert into ngword values(null,?)');
    $word2->execute([
        $_POST['word2']
    ]);
}
if(isset($_POST['word3'])){
    $word3=$pdo->prepare('insert into ngword values(null,?)');
    $word3->execute([
        $_POST['word3']
    ]);
}
}
echo '禁止ワードを追加しました。<br>';
?>
<button><a href="Forbidden_word_input.php">戻る</a></button>
<?php require 'footer.php'; ?> 