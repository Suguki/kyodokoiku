<?php
 //include 'src/index.php';
// ここは表示処理のみをするので何も書かない。書くのはsrc/index.php
?>

<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charaset = "UTF-8">
        <title>今日どこいく？</title>
        <link rel="stylesheet" href="style.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 

    </head>
    <body>
        <h2>今日どこ行く？</h2>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="card m-1" style="width: 18rem;">
                        <img src="../../images/food.jpg" class="card-img-top" alt="GOHAN">
                        <div class="card-body">
                            <h5 class="card-title">ご飯</h5>
                            <p class="card-text">何食べたいねん</p>
                            <a href="/food" class="btn btn-primary">検索</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card m-1" style="width: 18rem;">
                        <img src="../../images/sightseeing.jpeg" class="card-img-top" alt="KANKO">
                        <div class="card-body">
                            <h5 class="card-title">観光</h5>
                            <p class="card-text">散歩行っちゃう？？？</p>
                            <a href="/sightseeing" class="btn btn-primary">検索</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card m-1" style="width: 18rem;">
                        <img src="../../images/cafe.jpg" class="card-img-top" alt="COFFEE">
                        <div class="card-body">
                            <h5 class="card-title">カフェ</h5>
                            <p class="card-text">どこへ茶しばく？</p>
                            <a href="/cafe" class="btn btn-primary">検索</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>