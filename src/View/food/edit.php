<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "UTF-8">
        <title>今日どこいく？</title>
        <link rel="stylesheet" href="../../style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="header">
          <?php include( $_SERVER['DOCUMENT_ROOT'] . '/View/globalNav.php'); ?>
        </div>
        <a href="../../Top/top.php" class="btn btn-success position">戻る</a>
        <?php foreach ($results as $result) { ?>
            <div class="input-container m1">
                <form action="../../food/update.php" method="post">
                    <input type="text" name="place" value="<?php echo $result['place']; ?>" placeholder="ごはん屋さんを記入してください" size="50">
                    <p>遠くへ行きたい？近場がいい？</p>
                    <?php echo $result['distance']; ?>
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
                    </select>
                    <p>気分は？</p>
                    <select name="feeling" >
                        <option value="雰囲気を楽しみたい"
                        <?php if (isset($feeling)) { ?>
                            <?php if ($feeling == '雰囲気を楽しみたい') { ?>
                                selected
                            <?php }?>
                        <?php }?>
                        >雰囲気を楽しみたい</option>
                        <option value="コスパ重視"
                        <?php if (isset($feeling)) { ?>
                            <?php if ($feeling == 'コスパ重視') { ?>
                                selected
                            <?php }?>
                        <?php }?>
                        >コスパ重視</option>
                    </select>
                    <p>予算はどれくらい？</p>
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
                    <form action="./" method="get">
                        <input type="hidden" name="id" value="<?php echo $result['id'] ?>">
                    </form>
                </form>
                <form action="../../food/delete.php" name="delete" method="post">
                    <button type="submit">削除</button>
                    <form action="./" method="get">
                        <input type="hidden" name="id" value="<?php echo $result['id'] ?>">
                    </form>
                </form>
            </div>
         <?php } ?>
    </body>

