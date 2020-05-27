<?php
session_start();
$_SESSION['session_message'] = '値をセッションに保存しました';
?>
<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../../css/style.css">

<title>よくわかるPHPの教科書</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">よくわかるPHPの教科書</h1>    
</header>

<main>
<h2>セッションに値を保存する</h2>
<pre>
セッションに値を保存しました。次のページに移動してみましょう。
&raquo; <a href="page02.php">Page02へ</a>
</pre>
</main>
</body>
</html>