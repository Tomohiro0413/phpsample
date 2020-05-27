<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>よくわかるPHPの教科書</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">よくわかるPHPの教科書</h1>    
</header>

<main>
<h2>曜日を日本語で表示する - 配列</h2>
<pre>
<?php
// PHP5.4～の場合
$week_name = ['日', '月', '火', '水', '木', '金', '土'];

// PHP5.3以前の場合
//$week_name = array('日', '月', '火', '水', '木', '金', '土');

print ('今日は、' . $week_name[date('w')] . '曜日です');
?>
</pre>
</main>
</body>    
</html>