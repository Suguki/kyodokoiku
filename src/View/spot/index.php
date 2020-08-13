<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "UTF-8">
        <title>今日どこいく？</title>
        <link rel="stylesheet" href="style.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 

    </head>
    <body>
        <h1>今日どこ行く？</h1>
        <form action="../../spots/search.php" method="post">
            <div class="card m-1">
                <div class="card card-body">
                    <div class="card card-text">
                    <div class="option">遠くへ行きたい？近場がいい？</div>
                        <select name="distance" >
                            <option value="近場"
                            <?php if (isset($distance)) { ?>
                            <?php if ($distance == '近場') { ?>
                                selected
                            <?php }?>
                        <?php }?>
                            >近場</option>
                            <option value="遠く"
                            <?php if (isset($distance)) { ?>
                            <?php if ($distance == '遠く') { ?>
                                selected
                            <?php }?>
                        <?php }?>
                            >遠く</option>
                            <option value="めっちゃ遠く"
                            <?php if (isset($distance)) { ?>
                            <?php if ($distance == 'めっちゃ遠く') { ?>
                                selected
                            <?php }?>
                        <?php }?>
                            >めっちゃ遠く</option>
                        </select>
                    <div calss="option">気分は？</div>
                        <select name="feeling" >
                            <option value="浮世"
                            <?php if (isset($feeling)) { ?>
                            <?php if ($feeling == '浮世') { ?>
                                selected
                            <?php }?>
                        <?php }?>
                            >浮世を忘れたい</option>
                            <option value="おしゃれ"
                            <?php if (isset($feeling)) { ?>
                            <?php if ($feeling == 'おしゃれ') { ?>
                                selected
                            <?php }?>
                        <?php }?>
                            >おしゃれなところ行きたい</option>
                            <option value="自然"
                            <?php if (isset($feeling)) { ?>
                            <?php if ($feeling == '自然') { ?>
                                selected
                            <?php }?>
                        <?php }?>
                            >自然に癒やされたい</option>
                            <option value="ショッピング"
                            <?php if (isset($feeling)) { ?>
                            <?php if ($feeling == 'ショッピング') { ?>
                                selected
                            <?php }?>
                        <?php }?>
                            >ショッピングしたい</option>
                        </select>
                <div class="option">予算はどれくらい?</div>
                        <select name="cost" >
                            <option value="1"
                            <?php if (isset($cost)) { ?>
                            <?php if ($cost == '1') { ?>
                                selected
                            <?php }?>
                        <?php }?>
                            >2000~5000</option></option>
                            <option value="2"
                            <?php if (isset($cost)) { ?>
                            <?php if ($cost == '2') { ?>
                                selected
                            <?php }?>
                        <?php }?>
                            >5000~7000</option>
                            <option value="3"
                            <?php if (isset($cost)) { ?>
                            <?php if ($cost == '3') { ?>
                                selected
                            <?php }?>
                        <?php }?>
                            >7000~</option>
                        </select>
                    </div>
                </div>
            </div>
            <div calss="m1" style="float: right">
            <input type="submit" value="検索" class="btn btn-primary">
            </div>
        </form>
        <?php if (isset($errMsg)) { ?>
            <?php if (strlen($errMsg) > 0) { ?>
                <div class="card"><?php echo $errMsg; ?></div>
            <?php } ?>
        <?php } ?>

        <?php
            if (isset($result)) {
                foreach ($result as $index => $data) {
                    echo 'そうだ'.$data['place'].'、'.'行こう<br><br>';
                }
            }
        ?>
        <a class="" href="../">戻る</a>
    </body>
</html>