<?php
echo "DBからデータ取得して各値を表示する" . "<br>";


function selectDB($table){
  try {
    /// DB接続を試みる
    $dsn = 'mysql:dbname=sampledb;host=myapp-db';
    $dbh = new PDO($dsn, $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD']);
    // echo "DB接続成功";
  
    // SQL作成
    $sql = "SELECT $table FROM `test_t.saku` WHERE `date` >= (NOW() - INTERVAL 8 DAY)";
    echo "SQL : " . $sql . "<br>";
  
    // SQL実行
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    
    // 結果の取得
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($result).'<br>';;
    return $result;
  
  } catch(PDOException $e) {
    echo $e->getMessage();
    die();
  }
};

$result = selectDB('like_num');
for($i = 0; $i<7; $i++){
  $like_num[$i] = $result[$i]['like_num'];
  echo "いいね数 : " . $like_num[$i] . "<br>";
};