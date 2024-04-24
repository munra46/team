<?php session_start();?>
<?php require 'header.php'; ?>
<?php require 'db-connect.php';?>
<h1>新規登録</h1>
<?php
     $pdo=new PDO($connect,USER,PASS);
     if(isset($_SESSION['customer'])){
        $id=$_SESSION['customer']['id'];
        $sql=$pdo->prepare('select * from *** where id!=? and user_name=?');
        $sql->execute([$id,$_REQUEST['name']]);
     }else{
        $sql=$pdo->prepare('select * from *** where user_name=?');
        $sql->execute([$_REQUEST['name']]);
     }
     //mail
     if(isset($_SESSION['customer'])){
        $id2=$_SESSION['customer']['id'];
        $sql2=$pdo->prepare('select * from *** where id!=? and mail_address=?');
        $sql2->execute([$id2,$_REQUEST['address']]);
     }else{
        $sql2=$pdo->prepare('select * from *** where mail_address=?');
        $sql2->execute([$_REQUEST['address']]);
     }

     if(empty($sql2->fetchAll())){
     if(empty($sql->fetchAll())){
            $sql=$pdo->prepare('insert into *** values()');
            $sql->execute([
                $_REQUEST['name'],$_REQUEST['password'],
                $_REQUEST['address'],$_REQUEST['useraddress'],$_REQUEST['post']
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
</div>
<?php require 'footer.php'; ?>