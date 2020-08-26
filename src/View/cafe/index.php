<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "UTF-8">
        <title>今日どこいく？:カフェ</title>
        <link rel="stylesheet" type="text/css" href="/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <style>
            .position-cafe { position: fixed; bottom: 100px; right: 27px;}
        </style>
    </head>
    <body style="background-image: url('../../images/coffee.jpg');">
        <div id="header">
          <?php include( $_SERVER['DOCUMENT_ROOT'] . '/View/globalNav.php'); ?>
        </div>
        <div class="transparent">
            <h1>気分に合うカフェを探す</h1>
            <form action="../../cafe/search.php" method="post">
                <div class="card m-1 transparent" style="background-color: rgba(255, 255, 255, 0.8);">
                    <div class="card-body">
                        <p>どのエリア？</p>
                        <select name="prefecture" >
                            <option value="大阪"
                            <?php if (isset($prefecture)) { ?>
                               <?php if ($prefecture == '大阪') { ?>
                                   selected
                               <?php }?>
                            <?php }?>
                            >大阪</option>
                            <option value="京都"
                            <?php if (isset($prefecture)) { ?>
                               <?php if ($prefecture == '京都') { ?>
                                   selected
                               <?php }?>
                             <?php }?>
                            >京都</option>
                            <option value="奈良"
                             <?php if (isset($prefecture)) { ?>
                        　　    <?php if ($prefecture == '奈良') { ?>
                        　　        selected
                        　　    <?php }?>
                    　　    　<?php }?>
                            >奈良</option>
                        </select>
                        <hr>
                        <p>何系のカフェ？</p>
                        <select name="purpose">
                            <option value="おしゃべり"
                            <?php if (isset($purpose)) { ?>
                            　　　　　<?php if ($purpose == 'おしゃべり') { ?>
                            　　　　　    selected
                            　　　　　<?php }?>
                    　　    　　　<?php }?>
                            >おしゃべりしやすいところ</option>
                            <option value="読書"
                            <?php if (isset($purpose)) { ?>
                            　　　　　<?php if ($purpose == '読書') { ?>
                            　　　　　    selected
                            　　　　　<?php }?>
                    　　    　　　<?php }?>
                            >本が読める雰囲気のところ</option>
                            <option value="勉強"
                            <?php if (isset($purpose)) { ?>
                            　　　　　<?php if ($purpose == '勉強') { ?>
                            　　　　　    selected
                            　　　　　<?php }?>
                    　　    　　　<?php }?>
                            >集中して作業ができるところ</option>
                        </select>
                        <hr>
                        <p>どんな雰囲気が好み？</p>
                        <select name="atmosphere">
                            <option value="開放的"
                            <?php if (isset($atmosphere)) { ?>
                            　　　　　<?php if ($atmosphere == '開放的') { ?>
                            　　　　　    selected
                            　　　　　<?php }?>
                    　　    　　　<?php }?>
                            >店内が広くて開放的</option>
                            <option value="ゆっくりできる"
                            <?php if (isset($atmosphere)) { ?>
                            　　　　　<?php if ($atmosphere == 'ゆっくりできる') { ?>
                            　　　　　    selected
                            　　　　　<?php }?>
                    　　    　　　<?php }?>
                            >ひと目を気にせずゆっくりできる</option>
                        </select>
                        <hr>
                        <p>こだわりとかある？</p>
                        <select name="feature">
                            <option value="眺め"
                            <?php if (isset($feature)) { ?>
                            　　　　　<?php if ($feature == '眺め') { ?>
                            　　　　　    selected
                            　　　　　<?php }?>
                    　　    　　　<?php }?>
                            >窓から良い景色が見える</option>
                            <option value="本"
                            <?php if (isset($feature)) { ?>
                            　　　　　<?php if ($feature == '本') { ?>
                            　　　　　    selected
                            　　　　　<?php }?>
                    　　    　　　<?php }?>
                            >店主好みの本が置かれてたりする</option>
                            <option value="音楽"
                            <?php if (isset($feature)) { ?>
                            　　　　　<?php if ($feature == '音楽') { ?>
                            　　　　　    selected
                            　　　　　<?php }?>
                    　　    　　　<?php }?>
                            >良い感じの音楽が流れている</option>
                            <option value="食べ物"
                            <?php if (isset($feature)) { ?>
                            　　　　　<?php if ($feature == '食べ物') { ?>
                            　　　　　    selected
                            　　　　　<?php }?>
                    　　    　　　<?php }?>
                            >食べ物が美味しい</option>
                        </select>
                        <div class="m1" style="float: right">
                            <input type="submit" value="検索" class="btn btn-primary">
                        </div>
                    </div>
                </div>
            </form>
            <?php if (isset($errorMessage)) { ?>
                <?php if (strlen($errorMessage) > 0) { ?>
                    <div class="alert alert-danger"><?php echo $errorMessage; ?></div>
                <?php } ?>
            <?php } ?>
            <?php if (isset($result)) {
                    foreach ($result as $index => $data) {
                        echo '今日は'.$data['place'].'に行こうかな<br><br>'; ?>
                        <hr>
            <?php }
                } ?>
        </div>
        <div class="position-cafe">
            <a class="btn btn-success" href="../../Top/top.php">戻る</a>
        </div>
    </body>
</html>