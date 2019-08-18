<?php
session_start();

// ログイン状態チェック
if (!isset($_SESSION["NAME"])) {
    header("Location: login.php");
    exit;
}
?>

<!doctype html>
    <head>
        <meta charset="UTF-8">
        <title>アカウント設定</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="../assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="../assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="../assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="../assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="../assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="../assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="../assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="../assets/css/colors/default.css" rel="stylesheet">
  </head>
    <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <div class="page-loader">
            <div class="loader">Loading...</div>
          </div>
          <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
              <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button><a class="navbar-brand" href="../index.php">Wact Portal</a>
              </div>
              <div class="collapse navbar-collapse" id="custom-collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Wactについて</a>
                    <ul class="dropdown-menu">
                      <li><a href="../index.php#about">Wactの成り立ち</a></li>
                      <li><a href="../index.php#act_all">活動内容</a></li>
                      <li><a href="../index.php#menber">メンバー紹介</a></li>
                      <li><a href="../index.php#contact">問い合わせ</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">大会情報</a>
                    <ul class="dropdown-menu">
                      <li><a href="#">年間スケジュール</a></li>
                    </ul>
                  </li>

                  <li class="dropdown" style="display: flex; align-items: center;margin-left:10px;">
                  <img size="33" src="https://s3-ap-northeast-1.amazonaws.com/progate/production/images/user/wanko.jpg" class="u-mr10 mui-avatar" style="color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); user-select: none; display: inline-flex; align-items: center; justify-content: center; font-size: 16.5px; border-radius: 50%; height: 33px; width: 33px;">
                      <a class="dropdown-toggle" href="#" data-toggle="dropdown"><u><?php echo htmlspecialchars($_SESSION["NAME"], ENT_QUOTES); ?></u>さん</a>
                    <ul class="dropdown-menu">
                      <li><a href="#">アカウント設定</a></li>
                      <li><a href="logout.php">ログアウト</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        <div class="main">
        <section class="module">
        <div class="row">
            <div class="left">
                <div class="mine-card">
                    <div class="row multi-columns-row" sytle="height: 300px;">
                        <img size="150" src="https://s3-ap-northeast-1.amazonaws.com/progate/production/images/user/wanko.jpg" class="u-mr10 mui-avatar" style="color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); user-select: none; display: inline-flex; align-items: center; justify-content: center; font-size: 16.5px; border-radius: 50%; height: 150px; width: 150px; margin-bottom: 20px;">
                        <ul style="margin-top:50px;">
                            <li><a>名前：<?php echo htmlspecialchars($_SESSION["FULLNAME"], ENT_QUOTES); ?>  </a><a href=""> 変更する</a></li>
                            <li><a>アカウント名：<?php echo htmlspecialchars($_SESSION["NAME"], ENT_QUOTES); ?>  </a></li>
                            <li><a>学校名：<?php echo htmlspecialchars($_SESSION["SCHOOLNAME"], ENT_QUOTES); ?>  </a><a href=""> 変更する</a></li>
                            <li><a>戦型：<?php echo htmlspecialchars($_SESSION["STYLE"], ENT_QUOTES); ?>  </a><a href=""> 変更する</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mine-card">
                    <div class="score" style="height:300px;">
                        <h1>ここに直近の試合結果が入る</h1>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="mine-card cal" style="height:400px;">
                    <div class="row multi-columns-row">
                        <iframe src="https://calendar.google.com/calendar/embed?src=yama56th%40gmail.com&ctz=Asia%2FTokyo" style="border: 0" width="400" height="300" frameborder="0" scrolling="no"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>


    </div>
    </body>
        <!--  
    JavaScripts
    =============================================
    -->
    <script src="../assets/lib/jquery/dist/jquery.js"></script>
    <script src="../assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/lib/wow/dist/wow.js"></script>
    <script src="../assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="../assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="../assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="../assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="../assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="../assets/lib/smoothscroll.js"></script>
    <script src="../assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="../assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>
</html>