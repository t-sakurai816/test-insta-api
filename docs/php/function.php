<?php
// 関数のたまり場

function selectDB($column, $table){
  // 一週間分のデータを取得
  try {
    /// DB接続を試みる
    $dsn = 'mysql:dbname=sampledb;host=myapp-db';
    $dbh = new PDO($dsn, $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD']);
    // echo "DB接続成功";
  
    // SQL作成
    $sql = "SELECT $column FROM `$table` WHERE `date` >= (NOW() - INTERVAL 8 DAY)";
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

function showTable(){
  try {
    /// DB接続を試みる
    $dsn = 'mysql:dbname=sampledb;host=myapp-db';
    $dbh = new PDO($dsn, $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD']);
    // echo "DB接続成功";
  
    // SQL作成
    $sql = "show tables";
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
}

function dayBeforeNum($today, $lastday){
  try {
    $result = $today - $lastday;
    return $result;
  } catch (\Throwable $th) {
    echo $e->getMessage();
    die();
  }

};

function accountNameIsEmptyCheck($account_name){
  if (empty($account_name)){
    // echo '空です。';
    $account_name = "アカウントを選択してください";
    return $account_name;
  }else{
    // echo '空ではありません。';
    return $account_name;
  }
};

?>