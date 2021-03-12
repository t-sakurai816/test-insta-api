<?php

try {
  /// DB接続を試みる
  $dsn = 'mysql:dbname=sampledb;host=myapp-db';
  $dbh = new PDO($dsn, $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD']);
  // echo "DB接続成功";

	// SQL作成
	$sql = "SELECT * FROM `test_t.saku` WHERE `date` >= (NOW() - INTERVAL 7 DAY)";
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
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DBからデータ取得</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
  <header>
    <h1>SQL : <?php echo $sql; ?></h1>
  </header>
  <main>
    <div class="container">
      <div class="row">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>いいね数</th>
              <th>コメント数</th>
              <th>投稿数</th>
              <th>フォロワー数</th>
              <th>日付</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($result as $row){ ?>
            <tr>
              <td>
                <!-- ID -->
                <?php echo $row['id']; ?>
              </td>
              <td>
                <!-- いいね数 -->
                <?php echo $row['like_num']; ?>
              </td>
              <td>
                <!-- コメント数 -->
                <?php echo $row['comment_num']; ?>
              </td>
              <td>
                <!-- 投稿数 -->
                <?php echo $row['post_num']; ?>
              </td>
              <td>
                <!-- フォロワー数 -->
                <?php echo $row['follower_num']; ?>
              </td>
              <td>
                <!-- 日付 -->
                <?php echo $row['date']; ?>
              </td>
              <?php } ?>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </main>
  <footer></footer>
</body>

</html>