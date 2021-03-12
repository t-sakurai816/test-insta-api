<?php
// 関数のたまり場

function selectDB($table){
  // 一週間分のデータを取得
  try {
    /// DB接続を試みる
    $dsn = 'mysql:dbname=sampledb;host=myapp-db';
    $dbh = new PDO($dsn, $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD']);
    // echo "DB接続成功";
  
    // SQL作成
    $sql = "SELECT $table FROM `test_t.saku` WHERE `date` >= (NOW() - INTERVAL 8 DAY)";
    // echo "SQL : " . $sql . "<br>";
  
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

function dayBeforeNum($today, $lastday){
  try {
    $result = $today - $lastday;
    return $result;
  } catch (\Throwable $th) {
    echo $e->getMessage();
    die();
  }

};

?>