<?php
session_start();

// ログイン状態チェック
if (!isset($_SESSION["NAME"])) {
    header("Location: login/login.php");
    exit;
}

// include 'insert.php';
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>メイン</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styleMine.css">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
  </head>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ホーム画面</title>
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
                </button><a class="navbar-brand" href="index.php">Wact Portal</a>
              </div>
              <div class="collapse navbar-collapse" id="custom-collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Wactについて</a>
                    <ul class="dropdown-menu">
                      <li><a href="index.php#about">Wactの成り立ち</a></li>
                      <li><a href="index.php#act_all">活動内容</a></li>
                      <li><a href="index.php#menber">メンバー紹介</a></li>
                      <li><a href="index.php#contact">問い合わせ</a></li>
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
                      <li><a href="login/setting.php">アカウント設定</a></li>
                      <li><a href="login/logout.php">ログアウト</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        <div class="main">
        <section class="module">
          <div class="container c-card tab-group">
            <div class="row multi-columns-row">
              <div class="col-md-3 col-sm-6 col-xs-12 tab is-active">
                <div class="features-item">
                  <div class="features-icon"><span class="icon-lightbulb"></span></div>
                  <h3 class="features-title font-alt">イベント申し込み</h3> こちらから各種イベントの申し込みが可能です。
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12 tab">
                <div class="features-item">
                  <div class="features-icon"><span class="icon-tools"></span></div>
                  <h3 class="features-title font-alt">部活サポート</h3>部活サポートの調整が可能です。
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12 tab">
                <div class="features-item">
                  <div class="features-icon"><span class="icon-tools-2"></span></div>
                  <h3 class="features-title font-alt">練習試合</h3>他校への練習試合の申し込みが可能です。
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12 tab">
                <div class="features-item">
                  <div class="features-icon"><span class="icon-lifesaver"></span></div>
                  <h3 class="features-title font-alt">レーティングシステム</h3>Wact主催/サポートの大会結果における順位表が確認できます。
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="module panel-group">
        <div class="container c-card panel is-show">
            <div class="pow">
                <h1>イベントの申し込み</h1>
                <p>ここではイベントの申し込みができます。</p>
                <p>大会の1ヶ月前から申し込みのフォームが使用可能になります。</p>
            </div>
            <div class="row multi-columns-row">
                イベント申し込みフォームが入ります。
            </div>
        </div>
        <div class="container c-card panel">
            <div class="pow">
                <h1>部活サポートの申し込み</h1>
                <p>カレンダーを用いた部活サポートの申し込みができます。</p>
                <p>カレンダーの空き部分に記載をすると、Wactメンバーから直接あなたへ連絡が入ります。</p>
                <div class="mesBox">

                </div>
                <div class="sptForm">
                  <form action="" class="supBox">
                    <textarea name="message" name="supMes" id="supMes" cols="3" rows="1"></textarea>
                    <button type="submit" name="send" value="送信"></button>
                  </form>
                </div>
            </div>
            <div class="row multi-columns-row">
                部活サポートの申し込みフォームが入ります。
            </div>
        </div>
        <div class="container c-card panel">
            <div class="pow">
                <h1>練習試合の申し込みメッセンジャー</h1>
                <p>ここでは他校の生徒との直接の連絡を取ることができます。</p>
                <p>メッセージの内容はWactにて定期的にチェックを行います。正しい言葉遣いでの使用をお願いします。</p>
            </div>
            <div class="row multi-columns-row">
                練習試合の申し込みメッセージ交換サービスが入ります。
            </div>
        </div>
        <div class="container c-card panel">
            <div class="pow">
                <h1>あなたの戦績</h1>
                <p>ここではあなたの戦績が確認できます。Wact主催/合同開催の大会ではレーティングシステムを導入しています。</p>
                <p>1月スタートの12月までで、あなたが佐賀でどれほどの成績を納めたか、確認してみましょう。</p>
            </div>
            <div class="row multi-columns-row">
                レーティングシステムの推移が線グラフで表示されます。
            </div>
            <div class="rate">
            <img src="assets/images/rate.png" alt="">
            </div>
        </div>
        </section>


    </div>
    </body>
        <!--  
    JavaScripts
    =============================================
    -->
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        jQuery(function($){
        $('.tab').click(function(){
            $('.is-active').removeClass('is-active');
            $(this).addClass('is-active');
            $('.is-show').removeClass('is-show');
            // クリックしたタブからインデックス番号を取得
            const index = $(this).index();
            // クリックしたタブと同じインデックス番号をもつコンテンツを表示
            $('.panel').eq(index).addClass('is-show');
        });
        });
</script>
</html>