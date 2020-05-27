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
<h2>英単語と日本語の対応表を作る - 連想配列</h2>
<pre>
<?php
// PHP 5.3以前の場合は arrayを利用しましょう
$fruits = [
    'apple' => 'りんご',
    'grape' => 'ぶどう',
    'lemon' => 'レモン',
    'tomato' => 'トマト',
    'peach' => 'もも'
];

foreach ($fruits as $english => $japanese) {
    print ($english . ' : ' . $japanese . "\n");
}
?>
</pre>
</main>
</body>
</html>