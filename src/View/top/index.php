<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "UTF-8">
        <title>今日どこいく？</title>
        <link rel="stylesheet" type="text/css" href="/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
    </head>
    <body>
        <div id="header">
          <?php include( $_SERVER['DOCUMENT_ROOT'] . '/View/globalNav.php'); ?>
        </div>
        <span>
            <a  class="edit" href="/logIn">コンテンツを編集</a>
        </span>
        <h1>今日どこ行く？</h1>
        <div class="top-wrapper">
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
                            <img src="../../images/kyoto.jpeg" class="card-img-top" alt="KANKO">
                            <div class="card-body">
                                <h5 class="card-title">観光</h5>
                                <p class="card-text"></p>観光行っちゃう？？？</p>
                                <a href="/spot" class="btn btn-success">検索</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card m-1" style="width: 18rem;">
                            <img src="../../images/cafe.jpg" class="card-img-top" alt="COFFEE">
                            <div class="card-body">
                                <h5 class="card-title">カフェ</h5>
                                <p class="card-text">どこで茶しばく？</p>
                                <a href="/../../cafe" class="btn btn-warning">検索</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>