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
                <form action="../../spot/update.php" method="post">
                    <p>遠くへ行きたい？近場がいい？</p>
                    <h3><?php echo $result['place']; ?></h3>
                    <?php echo $result['howFar']; ?>
                    <select name="howFar" >
                        <option value="近場"
                        <?php if (isset($howFar)) { ?>
                            <?php if ($howFar == '近場') { ?>
                                selected
                            <?php }?>
                        <?php }?>
                        >近場</option>
                        <option value="遠く"
                        <?php if (isset($howFar)) { ?>
                            <?php if ($howFar == '遠く') { ?>
                                selected
                            <?php }?>
                        <?php }?>
                        >遠く</option>
                    </select>
                    <p>気分は？</p>
                    <?php echo $result['feeling']; ?>
                    <select name="feeling" >
                        <option value="浮世"
                        <?php if (isset($feeling)) { ?>
                            <?php if ($feeling == '浮世を忘れたい') { ?>
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
                        >オシャレなとこ行きたい</option>
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
                    <p>予算はどれくらい？</p>
                    <?php echo $result['cost']; ?>
                    <select name="cost" >
                        <option value="2000~5000"
                        <?php if (isset($cost)) { ?>
                            <?php if ($cost == '2000~5000') { ?>
                                selected
                            <?php }?>
                        <?php }?>>2000~5000</option>
                        <option value="5000~7000"
                        <?php if (isset($cost)) { ?>
                            <?php if ($cost == '5000~7000') { ?>
                                selected
                            <?php }?>
                        <?php }?>
                        >5000~7000</option>
                        <option value="7000~"
                        <?php if (isset($cost)) { ?>
                            <?php if ($cost == '7000~') { ?>
                                selected
                            <?php }?>
                        <?php }?>
                        > 7000~</option>
                    </select>
                    <button type="submit">更新!</button>
                     <div class="title">
                        <form action="./edit.php" method="get">
                            <input type="hidden" name="place" value="<?php echo $result['place'] ?>">
                        </form>
                     </div>
                </form>
            </div>
            <form action="../../spot/delete.php" method="post">
                <button type="submit">削除</button>
                     <div class="title">
                        <form action="./edit.php" method="get">
                            <input type="hidden" name="place" value="<?php echo $result['place'] ?>">
                        </form>
                    </div>
            </form>
         <?php } ?>
    </body>