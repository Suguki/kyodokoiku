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
        <form action="../../sightseeing/search.php" method="post">
            <div class="card m-1">
                <div class="card card-body">
                    <div class="card card-text">
                        <div class="option">遠くへ行きたい？近場がいい？</div>
                        <select name="howFar" >
                            <option value="近場">近場</option>
                            <option value="遠く">遠く</option>
                            <option value="めっちゃ遠く">めっちゃ遠く</option>
                        </select>
                        <div calss="option">気分は？</div>
                        <select name="feeling" >
                            <option value="浮世">浮世を忘れたい</option>
                            <option value="おしゃれ">おしゃれなところ行きたい</option>
                            <option value="自然">自然に癒やされたい</option>
                            <option value="ショッピング">ショッピングしたい</option>
                        </select>
                        <div class="option">予算はどれくらい?</div>
                        <select name="cost" >
                            <option value="1">2000~5000</option></option>
                            <option value="2">5000~7000</option>
                            <option value="3~">7000~</option>
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
                    echo 'そうだ'.$data['place'].'、'.'行こう<br><br>';
                }
            }
        ?>
        <a class="" href="../top/">戻る</a>
    </body>
</html>