<?php require 'header.php'; ?>
<?php require 'db_conect.php'; ?>
<?php
$pdo = new PDO($connect,USER,PASS);
$sql = $pdo->query('select * from client');
echo '<table id="cate" align="center">';
echo '<tr><td><div align="center">チャイニーズドラゴン</div></td></tr>';
echo '<tr><td><div align="center"><h3>アカウント一覧</h3></div></td></tr>';
foreach($sql as $row){
echo '<tr>';
echo '<td>';
echo '<div align="right">';
echo $row['name'],'<button><a href="account_management.php?client_id=',$row['client_id'],'">編集</a></button>';
if($row['freeze']!=1){
    echo '凍結されています';
}
echo '</div>';
echo '</td>';
echo '</tr>';
}
echo '</table>';
?>
<?php require 'footer.php'; ?> 