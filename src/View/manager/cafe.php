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
        <div id="header">
          <?php include( $_SERVER['DOCUMENT_ROOT'] . '/View/globalNav.php'); ?>
        </div>
        <?php if(isset($resultMessage)) { ?>
            <div class="alert alert-success text-center">
                <?php echo $resultMessage?>
            </div>
            <a href="../../Top/top.php" class="btn btn-success position">戻る</a>
            <a href="../../manager/signUpContents.php" class="btn btn-primary position">続けて追加</a>
        <?php }else {?>
            <?php if(isset($errorMessage)) { ?>
                <div class="alert alert-danger text-center">
                    <?php echo $errorMessage?>
                </div>
                <a href="../../manager/signUpContents.php" class="btn btn-success position">戻る</a>
            <?php } ?>
        <?php } ?>
    </body>
</html>