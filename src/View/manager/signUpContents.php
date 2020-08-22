<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Sign Up</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
    </head>
    <body>
        <div id="header">
          <?php include( $_SERVER['DOCUMENT_ROOT'] . '/View/globalNav.php'); ?>
        </div>
        <div class="card m-3">
            <div class="card-body">
                <div class="card-title">ごはん</div>
                <div class="card-text">
                    <form  action="/../../manager/editFood.php" method="post">
                        <div>
                            <input type="text" name="place" class="form-control">
                        </div>

                        <div>
                            <label>近場？遠方？</label>
                            <select name="distance" class="form-control">
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
                        </div>

                        <div>
                            <label>どんな気分のときに行きたくなる？</label>
                            <select name="feeling" class="form-control">
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
                        </div>

                        <div>
                            <label>予算はどれくらい？</label>
                            <select name="cost" class="form-control">
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
                        </div>

                        <div>
                            <input type="submit" name="food" value="登録！" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="card m-3">
            <div class="card-body">
                <div class="card-title">観光</div>
                    <div class="card-text">
                        <form  action="/../../manager/editSpot.php" method="post">
                            <div>
                                <input type="text" name="place" class="form-control">
                            </div>

                            <div>
                                <label>近場？遠い？</label>
                                <select name="distance" class="form-control">
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
                            </div>

                            <div>
                            <label>気分はどんな感じ？</label>
                            <select name="feeling" class="form-control">
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
                            </div>

                            <div>
                                <label>費用はどのくらいかかる？</label>
                                <select name="cost" class="form-control">
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
                            <div>
                                <input type="submit" name="spot" value="登録！" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="card m-3">
            <div class="card-body">
                <div class="card-title">カフェ</div>
                    <div class="card-text">
                        <form action="/../../manager/editCafe.php" method="post">
                            <div>
                                <input type="text" name="place" class="form-control">
                            </div>

                            <div>
                                <label>どこらへん？</label>
                                <select name="prefecture" class="form-control">
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
                            </div>

                            <div>
                                <label>何系のカフェ？</label>
                                <select name="purpose" class="form-control">
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
                            </div>

                            <div>
                                <label>どんな雰囲気？</label>
                                <select name="atmosphere" class="form-control">
                                    <option value="開放的"
                                        <?php if (isset($atomosphere)) { ?>
                                            <?php if ($atomosphere == '開放的') { ?>
                                                selected
                                            <?php }?>
                                        <?php }?>
                                    >店内が広くて開放的</option>
                                    <option value="ゆっくりできる"
                                        <?php if (isset($atomosphere)) { ?>
                                            <?php if ($atomosphere == 'ゆっくりできる') { ?>
                                                selected
                                            <?php }?>
                                        <?php }?>
                                    >ひと目を気にせずゆっくりできる</option>
                                </select>
                            </div>

                            <div>
                                <label>こだわりとかある？</label>
                                <select name="feature" class="form-control">
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
                            </div>
                            <div></div>
                                <input type="submit" name="cafe" value="登録！" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>