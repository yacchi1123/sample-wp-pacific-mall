<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="keywords" content="共通キーワード" />
  <meta name="description" content="共通ディスクリプション" />
  <title>PACIFIC MALL DEVELOPMENT</title>
  <link rel="shortcut icon" href="./assets/images/common/favicon.ico" />
  <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Vollkorn:400i" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css" />
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/bundle.js"></script>
  <?php wp_head(); ?>
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
