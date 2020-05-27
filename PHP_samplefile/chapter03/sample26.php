<?php
$email = 'master@h2o-space.com';

mb_language('japanese');
mb_internal_encoding('UTF-8');

$from = 'noreply@example.com';
$subject = 'よくわかるPHPの教科書';
$body = 'このメールは、『よくわかるPHPの教科書』から送信しています';

$success = mb_send_mail($email, $subject, $body, 'From: ' . $from);
?>
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
<h2>電子メールを送信する</h2>
<pre>
<?php if ($success) : ?>
電子メールを送信しました。メールボックスを確認してみてください。
<?php else : ?>
電子メールの送信に失敗しました。Webサーバーの設定などをご確認ください。
<?php endif; ?>
</pre>
</main>
</body>
</html>
