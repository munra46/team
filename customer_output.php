<?php session_start();?>
<?php require 'header.php'; ?>
<?php require 'db_conect.php';?>
<h1>新規登録</h1>
<?php
     $pdo=new PDO($connect,USER,PASS);
     if(isset($_SESSION['customer'])){
        $id=$_SESSION['customer']['id'];
        $sql=$pdo->prepare('select * from client where client_id!=? and name=?');
        $sql->execute([$id,$_REQUEST['name']]);
     }else{
        $sql=$pdo->prepare('select * from client where name=?');
        $sql->execute([$_REQUEST['name']]);
     }
     //mail
     if(isset($_SESSION['customer'])){
        $id2=$_SESSION['customer']['id'];
        $sql2=$pdo->prepare('select * from client where client_id!=? and client_address=?');
        $sql2->execute([$id2,$_REQUEST['address']]);
     }else{
        $sql2=$pdo->prepare('select * from client where client_address=?');
        $sql2->execute([$_REQUEST['address']]);
     }

     if(empty($sql2->fetchAll())){
     if(empty($sql->fetchAll())){
            $sql=$pdo->prepare('insert into client values(null,?,?,?,1)');
            $sql->execute([
                $_REQUEST['address'],$_REQUEST['password'],$_REQUEST['name']   
            ]);
                echo'<p class="log">情報を登録しました。</p>';
                echo '<a href="login_input.php" id="my"><button>ログインへ戻る</button></a>';
    }else{
        echo'<p class="log">ログイン名が既に使用されています。</p>';
        echo '<a href="customer-input.php" id="my"><button>登録画面へ戻る</button></a>';
    }
    }else{
        echo'<p class="log">メールアドレスが既に使用されています。</p>';
        echo '<a href="customer-input.php" id="my"><button>登録画面へ戻る</button></a>';
    }
?>
<?php require 'footer.php'; ?>