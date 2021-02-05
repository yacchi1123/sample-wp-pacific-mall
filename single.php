<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="keywords" content="共通キーワード" />
  <meta name="description" content="共通ディスクリプション" />
  <title>PACIFIC MALL DEVELOPMENT</title>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/favicon.ico" />
  <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Vollkorn:400i" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css" />
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/bundle.js"></script>
</head>
<body>
  <div class="container">
    <header id="header">
      <div class="header-inner">
        <div class="logo">
          <a class="logo-header" href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo-main.svg" class="main-logo" alt="PACIFIC MALL DEVELOPMENT" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo-fixed.svg" class="fixed-logo" alt="PACIFIC MALL DEVELOPMENT" />
          </a>
        </div>
        <button class="toggle-menu js-toggoleNav">
          <span class="toggle-line">メニュー</span>
        </button>
        <div class="header-nav">
          <nav class="global-nav">
            <ul class="menu">
              <li class="menu-item">
                <a class="nav-link active" href="#">ホーム</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">企業情報</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">店舗情報</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">地域貢献活動</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">ニュースリリース</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">お問い合わせ</a>
              </li>
            </ul>
          </nav>
          <form class="search-form" role="search" method="get" action="">
            <div class="search-box">
              <input type="text" class="search-input" name="" placeholder="キーワードを入力してください" />
              <button type="submit" class="button-submit"></button>
            </div>
            <div class="search-buttons">
              <button type="button" class="close-icon js-searchIcon"></button>
              <button type="button" class="search-icon js-searchIcon"></button>
            </div>
          </form>
        </div>
      </div>
    </header>
    <div class="wrap">
      <div id="primary" class="content-area">
        <main>
          <div class="page-contents">
            <div class="page-head">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-page-news.jpg" alt="" />
              <div class="wrapper">
                <span class="page-title-en"></span>
                <h2 class="page-title">ニュースリリース</h2>
              </div>
            </div>
            <div class="page-container">
              <div class="page-inner full-width">
                <div class="page-main" id="pg-newsDetail">
                  <div class="main-container">
                    <div class="main-wrapper">
                      <div class="news">
                        <time class="time"><?php the_time('Y.m.d'); ?></time>
                        <p class='title'><?php the_title(); ?></p>
                        <div class="news-body">
                          <?php the_content(); ?>
                        </div>
                      </div>
                      <div class="more-news">
                        <div class="next">
                          <a class="another-link" href="#">NEXT</a>
                        </div>
                        <div class="prev">
                          <a class="another-link" href="#">PREV</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- #page-container -->
          </div><!-- #page-contents -->
        </main>
      </div><!-- #primary -->
    </div><!-- .wrap -->
    <footer class="footer" id="footer">
      <div class="footerContents">
        <div class="footerContents-contact">
          <div class="enterprise-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logo-footer.svg" alt="PACIFIC MALL DEVELOPMENT" />
          </div>
          <div class="enterprise-detail">
            <p class="name">パシフィックモール開発株式会社</p>
            <p class="address">
              東京都千代田区大手町0-1-2<br />
              パシフィックモールビルディング18F 
            </p>
          </div>
        </div>
        <div class="footerContents-sitemap">
          <nav class="footer-nav">
            <ul class="menu">
              <li class="menu-item">
                <a class="nav-link" href="#">企業情報</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">会社概要</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">事業紹介</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">沿革</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">店舗情報</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">地域貢献活動</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">ニュースリリース</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">お問い合わせ</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <p class="copyright">
        <small class="copyright-text">&#169; 2019 PACIFIC MALL DEVELOPMENT CO.,LTD.</small>
      </p>
    </footer>
  </div><!-- /.container -->
</body>
</html>