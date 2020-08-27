<div id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/Top/top.php">今日どこ行く？</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="/logIn/index.php">Sigh Up / Sigh In</a>
            </li>
            <?php if(isset($_SESSION)): ?>
              <?php if(!empty($_SESSION)): ?>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    編集
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/food/edit.php">ご飯</a>
                    <a class="dropdown-item" href="/spot/edit.php">観光</a>
                    <a class="dropdown-item" href="/cafe/edit.php">カフェ</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../manager/signUpContents.php">追加</a>
                </li>
              <?php endif; ?>
            <?php endif; ?>
          </ul>
        </div>
    </nav>
</div>