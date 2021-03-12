<?php


try {
  /// DB接続を試みる
  $dsn = 'mysql:dbname=sampledb;host=myapp-db';
  $db = new PDO($dsn, $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD']);
  $msg = "MySQL への接続確認が取れました。";
} catch (PDOException $e) {
  $isConnect = false;
  $msg       = "MySQL への接続に失敗しました。<br>(" . $e->getMessage() . ")";
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MySQL接続確認</title>
</head>
<body>
<h1>MySQL接続確認</h1>
  <p><?php echo $msg; ?></p>
</body>
</html>
