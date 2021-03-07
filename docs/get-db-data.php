<?php
echo "DBからデータ取得して各値を表示する" . "<br>";

try {
  /// DB接続を試みる
  $dsn = 'mysql:dbname=sampledb;host=myapp-db';
  $dbh = new PDO($dsn, $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD']);
  // echo "DB接続成功";

	// SQL作成
	$sql = "SELECT `like_num` FROM `test_t.saku` WHERE `date` >= (NOW() - INTERVAL 7 DAY)";
  // echo $sql.'<br>';

  // SQL実行
  $stmt = $dbh->prepare($sql);
  $stmt->execute();
  
  // 結果の取得
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  // var_dump($result).'<br>';;

} catch(PDOException $e) {
	echo $e->getMessage();
	die();
}

echo "SQL : " . $sql . "<br>";
// echo('<pre>');
//   var_dump($result) . "<br>";
// echo('</pre>');

for($i = 0; $i<7; $i++){
  $like_num[$i] = $result[$i]['like_num'];
  echo "いいね数 : " . $like_num[$i] . "<br>";
};