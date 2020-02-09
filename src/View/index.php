<?php
?>

<!DOCTYPE html>
    <html lang = "ja">
        <head>
            <meta charaset = "UTF-8">
            <title>今日どこいく？</title>
            <link rel="stylesheet" href="style.css">

        </head>
        <body>
                    <h1>今日どこ行く？</h1>

        <form action="/store.php" method="post">
            <div class="input-container m1">
                <div class="h1">遠くへ行きたい？近場がいい？</div>
                <select name="howFar" >
                    <option value="近場">近場</option>
                    <option value="遠く">遠く</option>
                </select>
                <div calss="option">ご飯メイン？散歩メイン？</div>
                <select name="main" >
                    <option value="御飯">御飯</option>
                    <option value="散歩">散歩</option>
                </select>
                <div class="option">予算はどれくらい?</div>
                <select name="cost" >
                    <option value="2000~5000">2000~5000</option></option>
                    <option value="5000~7000">5000~7000</option>
                    <option value="7000~">7000~</option>
                </select>
            </div>
            <div class="m1" style="float: right">
                <input type="submit"  value="レッツラゴー" class="btn-square">
            </div>
        </form>
        </body>

</HTML>