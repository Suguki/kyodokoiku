
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
        <?php foreach ($results as $result) { ?>
            <div class="input-container m1">
                <form action="../../cafe/update.php" method="post">
                    <div class="option">どのエリア？</div>
                    <h3><?php echo $result['place']; ?></h3>
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
                    <div calss="option">何系のカフェ？</div>
                    <?php echo $result['purpose']; ?>
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
                    <div class="option">どんな雰囲気が好み？</div>
                    <?php echo $result['atmosphere']; ?>
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
                    <div class="option">こだわりとかある？</div>
                    <?php echo $result['feature']; ?>
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
                    <button type="submit">更新!</button>
                     <div class="title">
                        <form action="./edit.php" method="get">
                            <input type="hidden" name="place" value="<?php echo $result['place'] ?>">
                        </form>
                     </div>
                </form>
                <div class="title">
                        <form action="../../manager/editCafe.php" name="delete">
                          <button type="submit">削除</button>
                        </form>
                </div>
            </div>
         <?php } ?>
    </body>

