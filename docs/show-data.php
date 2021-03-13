<?php
// データを取得する関数を読み込み
require_once('php/function.php');
// 今日の日付
$today = date("Y-m-d");

$get_tables = showTable();
// print_r($get_tables);
for($i=0; $i<count($get_tables); $i++){
  $talbe_name[$i] = $get_tables[$i]['Tables_in_sampledb'];
  echo "テーブル名：". $talbe_name[$i] . "<br>";
}
$table = 'test_t.saku';

// 日付
$date_result = selectDB('date', $table);
for($i = 0; $i<8; $i++){
  $date_num[$i] = $date_result[$i]['date'];
  // echo "日付 : " . $date_num[$i] . "<br>";
};

// いいね数
$like_result = selectDB('like_num', $table);
for($i = 0; $i<8; $i++){
  $like_num[$i] = $like_result[$i]['like_num'];
  // echo "いいね数 : " . $like_num[$i] . "<br>";
};

// コメント数
$comment_result = selectDB('comment_num', $table);
for($i = 0; $i<8; $i++){
  $comment_num[$i] = $comment_result[$i]['comment_num'];
  // echo "コメント数 : " . $comment_num[$i] . "<br>";
};

// 投稿数
$post_result = selectDB('post_num', $table);
for($i = 0; $i<8; $i++){
  $post_num[$i] = $post_result[$i]['post_num'];
  // echo "投稿数 : " . $post_num[$i] . "<br>";
};

// フォロワー数
$follower_result = selectDB('follower_num', $table);
for($i = 0; $i<8; $i++){
  $follower_num[$i] = $follower_result[$i]['follower_num'];
  // echo "フォロワー数 : " . $follower_num[$i] . "<br>";
};


// 前日のいいね数
$like_day_before_num = dayBeforeNum($like_num[0], $like_num[1]);
// 前日のコメント数
$comment_day_before_num = dayBeforeNum($comment_num[0], $comment_num[1]);
// 前日の投稿数
$post_day_before_num = dayBeforeNum($post_num[0], $post_num[1]);
// 前日のフォロワー数
$follower_day_before_num = dayBeforeNum($follower_num[0], $follower_num[1]);


// ラベルを作成
$label = "'" .$date_num[7] . "','" . $date_num[6] . "','" . $date_num[5] . "','" . $date_num[4] . "','" . $date_num[3] . "','" . $date_num[2] . "','" . $date_num[1] . "','" . $date_num[0] . "'";
$label = trim($label,",");

// いいねデータを作成
$like_data = $like_num[7] . ',' . $like_num[6] . ',' . $like_num[5] . ',' . $like_num[4] . ',' . $like_num[3] . ',' . $like_num[2] . ',' . $like_num[1] . ',' . $like_num[0];

// コメントデータを作成
$comment_data = $comment_num[7] . ',' . $comment_num[6] . ',' . $comment_num[5] . ',' . $comment_num[4] . ',' . $comment_num[3] . ',' . $comment_num[2] . ',' . $comment_num[1] . ',' . $comment_num[0];

// いいねデータを作成
$post_data = $post_num[7] . ',' . $post_num[6] . ',' . $post_num[5] . ',' . $post_num[4] . ',' . $post_num[3] . ',' . $post_num[2] . ',' . $post_num[1] . ',' . $post_num[0];

// いいねデータを作成
$follower_data = $follower_num[7] . ',' . $follower_num[6] . ',' . $follower_num[5] . ',' . $follower_num[4] . ',' . $follower_num[3] . ',' . $follower_num[2] . ',' . $follower_num[1] . ',' . $follower_num[0];

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
  <title>インスタ集計ツール</title>
  <link rel="stylesheet" href="css/index.css">
  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>

<body>
  <header>
    <h1 class="text-center py-3"><?php echo $table ?></h1>
  </header>
  <main>
    <div class="container">
      <div class="row">
        <div class="wrap-count col-lg-3">
          <p class="like-count p-3">いいね数</p>
          <p class="like-count-num text-right"><?php  echo $like_num[0] ?></p>
          <div class="wrap-day-before">
            <div class="day-before px-3">
              <p>前日比</p>
            </div>
            <div class="day-before-num">
              <p class=""><? echo $like_day_before_num; ?></p>
            </div>
          </div>
        </div>
        <div class="wrap-count col-lg-3">
          <p class="comment-count p-3">コメント数</p>
          <p class="comment-count-num text-right"><?php  echo $comment_num[0] ?></p>
          <div class="wrap-day-before">
            <div class="day-before px-3">
              <p>前日比</p>
            </div>
            <div class="day-before-num">
              <p class=""><? echo $comment_day_before_num; ?></p>
            </div>
          </div>
        </div>
        <div class="wrap-count col-lg-3">
          <p class="media-count p-3">投稿数</p>
          <p class="media-count-num text-right"><?php  echo $post_num[0] ?></p>
          <div class="wrap-day-before">
            <div class="day-before px-3">
              <p>前日比</p>
            </div>
            <div class="day-before-num">
              <p class=""><? echo $post_day_before_num; ?></p>
            </div>
          </div>
        </div>
        <div class="wrap-count col-lg-3">
          <p class="followers-count p-3">フォロワー数</p>
          <p class="followers-count-num text-right"><?php  echo $follower_num[0] ?></p>
          <div class="wrap-day-before">
            <div class="day-before px-3">
              <p>前日比</p>
            </div>
            <div class="day-before-num">
              <p class=""><? echo $follower_day_before_num; ?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <canvas id="myChart"></canvas>
          <script>
            var num = <? echo $date_num[0] ?>;
            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
              // The type of chart we want to create
              type: 'line',
              // The data for our dataset
              data: {
                labels: [<? echo $label; ?>],
                datasets: [{
                  label: 'いいね数',
                  // backgroundColor: 'rgb(255, 99, 132)',
                  borderColor: 'rgb(255, 99, 132)',
                  data: [<? echo $like_data; ?>]
                }]
              },
              // Configuration options go here
              options: {}
            });
          </script>
        </div>
        <div class="col-lg-6">
          <canvas id="myChart2"></canvas>
          <script>
            var ctx = document.getElementById('myChart2').getContext('2d');
            var chart = new Chart(ctx, {
              // The type of chart we want to create
              type: 'line',
              // The data for our dataset
              data: {
                labels: [<? echo $label; ?>],
                datasets: [{
                  label: 'コメント数',
                  // backgroundColor: 'rgb(255, 99, 132)',
                  borderColor: 'rgb(60, 179, 113)',
                  data: [<? echo $comment_data; ?>]
                }]
              },
              // Configuration options go here
              options: {}
            });
          </script>
        </div>
        <div class="col-lg-6">
          <canvas id="myChart3"></canvas>
          <script>
            var ctx = document.getElementById('myChart3').getContext('2d');
            var chart = new Chart(ctx, {
              // The type of chart we want to create
              type: 'line',
              // The data for our dataset
              data: {
                labels: [<? echo $label; ?>],
                datasets: [{
                  label: '投稿数',
                  // backgroundColor: 'rgb(255, 99, 132)',
                  borderColor: 'rgb(100, 149, 237)',
                  data: [<? echo $post_data; ?>]
                }]
              },
              // Configuration options go here
              options: {}
            });
          </script>
        </div>
        <div class="col-lg-6">
          <canvas id="myChart4"></canvas>
          <script>
            var ctx = document.getElementById('myChart4').getContext('2d');
            var chart = new Chart(ctx, {
              // The type of chart we want to create
              type: 'line',
              // The data for our dataset
              data: {
                labels: [<? echo $label; ?>],
                datasets: [{
                  label: 'フォロワー数',
                  // backgroundColor: 'rgb(255, 99, 132)',
                  borderColor: 'rgb(255, 140, 0)',
                  data: [<? echo $follower_data; ?>]
                }]
              },
              // Configuration options go here
              options: {}
            });
          </script>
        </div>

      </div>
    </div>
  </main>
  <footer class="text-center py-3">
    <!-- TODO -->
  </footer>
</body>

</html>