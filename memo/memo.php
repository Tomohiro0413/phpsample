<?php require('dbconnect.php'); ?>

<main>
    <h2>Practice</h2>
<?php 
    $memos = $db->prepare('SELECT * FROM memos WHERE id = ?');
    $memos ->execute(array($_REQUEST['id']));
    $memo = $memos->fetch();
?>
<article>
    <pre><?php print($memo['memo']) ; ?></pre>
    <a href="update.php?id=<?php print($memo['id']) ; ?>">編集する<a>
    <a href="delete.php?id=<?php print($memo['id']) ; ?>">削除する<a>
    <a href="index.php">戻る</a>
</article>


</main>