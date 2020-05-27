<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>1から365までの数字を表示する</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">よくわかるPHPの教科書</h1>    
</header>

<main>
<h2>変数を使って、計算結果を保管する</h2>
<pre>
<?php
for ($i=1; $i<=365; $i++) {
    print($i . "\n");
}
?>
</pre>
</main>
</body>    
</html>