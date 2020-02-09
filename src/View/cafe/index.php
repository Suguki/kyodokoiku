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

        <form action="../../cafe/search.php" method="post">
                    <div class="card m-1">
                        <div class="card card-body">
                            <div class="card card-text">
                                <div class="option">どのエリア？</div>
                                <select name="prefecture" >
                                    <option value="大阪">大阪</option>
                                    <option value="京都">京都</option>
                                    <option value="奈良">奈良</option>
                                </select>
                                <div calss="option">何系のカフェ？</div>
                                <select name="purpose">
                                    <option value="おしゃべり">おしゃべりしやすいところ</option>
                                    <option value="読書">本が読める雰囲気のところ</option>
                                    <option value="勉強">集中して作業ができるところ</option>
                                </select>
                                <div class="option">どんな雰囲気が好み？</div>
                                <select name="atomosphere" >
                                    <option value="開放的">店内が広くて開放的</option>
                                    <option value="ゆっくりできる">ひと目を気にせずゆっくりできる</option>
                                </select>
                                <div class="option">こだわりとかある？</div>
                                <select name="feature">
                                    <option value="眺めが良い">窓から良い景色が見える</option>
                                    <option value="本がおいてある">店主好みの本が置かれてたりする</option>
                                    <option value="音楽が良い">良い感じの音楽が流れている</option>
                                    <option value="食べ物が美味しい">食べ物が美味しい</option>
                                </select>
                            </div>
                        </div>
                    </div>
            <div calss="m1" style="float: right">
            <input type="submit" value="検索" class="btn btn-primary">
            </div>
        </form>
        <?php
            if (isset($result)) {
                foreach ($result as $index => $data) {
                    echo '今日は'.$data['place'].'に行こうかな<br><br>';
                }
            }else{
                echo '開拓中です！ごめんね！<br><br>'; //ここどうしよう
            }
        ?>
        <a class="" href="../top/">戻る</a>
    </body>
</html>