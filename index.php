
<!-- PCversion -->
<?php require_once('./data.php');
?><!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet" />
  <title><?php echo $title ?></title>
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css" />
  <link rel="stylesheet" href="./style.css" />
  <script src="//code.jquery.com/jquery-1.12.1.min.js"></script>
</head>

<body>
  <header>
    <div class="header-left"><!--
    --><form action="#" method="get"><!--
  --><input class="search" name="search" type="search" placeholder="<?php echo $search ?>"/><!--
--><input class="sub" type="submit" value="&#xf002;" class="fas"/><!--
--></form>
</div>
<div class="header-logo">
  <?php echo $title?>
</div>
<div class="header-right">
  <a href="#"><?echo $member?></a>
  <a href="#"><?echo $login?></a>
</div>
</header>

<div class="contents"><!--外枠-->
  <div class="banner"><!--バナーの枠--><!--
  --><?php foreach($topics as $topic):?><!--
--><a href="#"><div class="normal"><!--普通のコンテンツ-->
<div class="img"><!--
--><img src="<?php echo $topic->getImg()?>" class="size"　height="100%" width="100%"/>
</div><!--
--><div class="bottom">
<a href="#" class="atagu"><p class="topifont border"><?php echo $topic->getTitle()?></p></a>
<p class=topic-article><?php echo $topic->getArticle()?></p>
<p class="topic-bottom">
  <span><?echo $topic->getName()?></span>
  <span class="topic-view"><?echo $topic->getView()?> view</span>
</p>
</div>
</div></a><!--
--><?php endforeach?><!--
--></div>
</div>

<div class="main">
  <div class="list">
    <p><?php echo $kiji?></p>

    <ul>
      <a href="#" class="addStyle hover section"><li class="addStyle section"><i class="fas fa-home addStyle section"></i><?php echo $home?></li></a>
      <a href="#" class="hover section"><li class="section"><i class="fas fa-user-secret section"></i><?php echo $fa?></li></a>
      <a href="#" class="hover section"><li class="section"><i class="fas fa-marker section"></i><?php echo $cosme?></li></a>
      <a href="#" class="hover section"><li class="section"><i class="fas fa-cut section"></i><?php echo $hair?></li></a>
      <a href="#" class="hover section"><li class="section"><i class="fas fa-pencil-ruler section"></i><?php echo $nail?></li></a>
      <a href="#" class="hover section"><li class="section"><i class="fas fa-magic section"></i><?php echo $beauty?></li></a>
      <a href="#" class="hover section"><li class="section"><i class="fab fa-pagelines section"></i><?php echo $life?></li></a>
      <a href="#" class="hover section"><li class="section"><i class="fas fa-heart section"></i><?php echo $renai?></li></a>
      <a href="#" class="hover section"><li class="section"><i class="fas fa-utensils section"></i><?php echo $gurume?></li></a>
      <a href="#" class="hover section"><li class="section"><i class="fas fa-briefcase section"></i><?php echo $travel?></li></a>
    </ul>
  </div>
  <div class="pickup">
    <div class="un">
      <div class="top">
        <h3>
          <? echo $time?>のピックアップ
        </h3>
        <p>
          今日のピックアップ記事
        </p>
      </div>
    </div>
    <div class="pickup-article">
      <?php foreach($pickups as $pickup):?>
        <a href="#">  <div class="pick-item">
          <div class="pick-img">
            <img src="<?php echo $pickup->getImg()?>"/>
          </div>
          <div class="pick-main">
            <h3 class="border"><?php echo $pickup->getTitle()?></h3>
            <p>
              <?php echo $pickup->getArticle()?>
            </p>
            <p class="pickup-bottom">
              <span><?php echo $pickup->getName()?></span>
              <span class="pickup-view"><?php echo $pickup->getView()?> view</span>
            </p>
          </div>
        </div></a>
      <?php endforeach?>
    </div>
    <div class="number-bottom">
      <div class="select-number">
        <a href="#"><span class="boxnumber number-first">1</span></a>
        <a href="#"><span class="boxnumber">2</span></a>
        <a href="#"><span class="boxnumber">3</span></a>
        <a href="#"><span class="boxnumber">4</span></a>
        <a href="#"><span class="boxnumber">5</span></a>
      </div>
    </div>
  </div>
  <div class="right">
    <div class="access">
      <div class="access-top">
        <h4>アクセスランキング</h4>
        <p>人気の記事ランキング</p>
      </div>
      <div class="access-rank">
        <?php foreach($accesss as $access):?>
          <a class="hoge" href="#"><div class="access-item">
            <div class="access-img">
              <img src="<?php echo $access->getImg()?>" height="60" width="60"/>
            </div>
            <div class="access-main"><!--
            --><h4 class="border"><?php echo $access->getTitle()?></h4><!--
          --><p class="rank-name"><?php echo $access->getName()?></p>
        </div>
      </div></a>
    <?php endforeach?>
  </div>
  <div class="box">
    <a href="#"><p><?echo $rankview?></a>
    </div>
  </div>

  <div class="access line-bottom">
    <div class="access-top">
      <h4><?echo $recomend?></h4>
      <p><?echo $recomendSub?></p>
    </div>
    <div class="access-rank">
      <?php foreach($accesss as $access):?>
        <a href="#"><div class="access-item">
          <div class="another-img">
            <img src="./reco.png" height="60" width="60"/>
          </div>
          <div class="access-main"><!--
          --><a href="#">  <h4 class="border"><?php echo $access->getTitle()?></h4></a><!--
        --><p class="rank-name"><?php echo $access->getName()?></p>
      </div>
    </div></a>
  <?php endforeach?>
</div>
</div>

<div class="access">
  <div class="access-top">
    <h4><?echo $new?></h4>
    <p><?echo $newSub?></p>
  </div>
  <div class="access-rank">
    <?php foreach($topics as $topic):?>
      <a href="#"><div class="access-item">
        <div class="another-img">
          <img src="./face.png" height="60" width="60"/>
        </div>
        <div class="access-main"><!--
        --><a href="#">  <h4 class="border"><?php echo $topic->getTitle()?></h4></a><!--
      --><p class="rank-name"><?php echo $topic->getName(); ?></p>
    </div>
  </div></a>
    <?php endforeach; ?>
</div>
<div class="box">
  <a href="#"><p><?php echo $newI; ?></a>
  </div>
</div>


</div>
</div>

<div class="last">
  <div class="last-content">
    <h1><?echo $app?></h1>
    <p>
      <?php echo $come?>
    </p>
    <div class="download">
      <a href="https://itunes.apple.com/jp/app/id884484921"><span><img src="apple.png" height="50" width="150"/></span></a>
      <a href="https://play.google.com/store/apps/details?id=jp.peroli.mery"><span><img src="android.png" height="50" width="150"/></span></a>
    </div>
  </div>
</div>


<footer>
  <div class="area"><!--
  --><div class="footer-logo"><!--
--><?php echo $title?><!--
--></div><!--
--><div class="category">
<ul>
  <li class="category-title">カテゴリ一覧</li>
</ul><!--
--><div class="category-list">
<ul>
  <a href="#"><li><?php echo $fa?></li></a>
  <a href="#"><li><?php echo $cosme?></li></a>
  <a href="#"><li><?php echo $hair?></li></a>
</ul>
</div><!--
--><div class="category-list">
<ul>
  <a href="#"><li><?php echo $nail?></li></a>
  <a href="#"><li><?php echo $beauty?></li></a>
  <a href="#"><li><?php echo $life?></li></a>
</ul>
</div><!--
--><div class="category-list">
<ul>
  <a href="#"><li><?php echo $renai?></li></a>
  <a href="#"><li><?php echo $gurume?></li></a>
  <a href="#"><li><?php echo $travel?></li></a>
</ul>
</div><!--
--></div>
<div class="about">
  <ul>
    <li class="category-title"><?echo $about?></li>
  </ul><!--
  --><div class="about-list">
  <ul>
    <a href="#"><li><?php echo $itiran?></li></a>
    <a href="#"><li><?php echo $keyward?></li></a>
    <a href="#"><li><?php echo $form?></li></a>
  </ul>
</div><!--
--><div class="about-list">
<ul>
  <a href="#"><li><?php echo $company?></li></a>
  <a href="#"><li><?php echo $yokuaru?></li></a>
  <a href="#"><li><?php echo $rule?></li></a>
</ul>
</div><!--
--></div>
</div>
</footer>
<div class="footer-last">
  <div class="mannaka">
    <div class="footer-left">
      <p><?echo $message?></p>
      <span class="twitter"><a href="https://twitter.com/intent/tweet?original_referer=https%3A%2F%2Fmery.jp%2F&ref_src=twsrc%5Etfw&related=mery_news&text=MERY%5B%E3%83%A1%E3%83%AA%E3%83%BC%5D%EF%BD%9C%E5%A5%B3%E3%81%AE%E5%AD%90%E3%81%AE%E6%AF%8E%E6%97%A5%E3%82%92%E3%81%8B%E3%82%8F%E3%81%84%E3%81%8F%E3%80%82&tw_p=tweetbutton&url=https%3A%2F%2Fmery.jp%2F%3Ffrom%3Dmery"><i class="fab fa-twitter"></i>ツイート</a></span>
      <span class="facebook"><a href="https://www.facebook.com/v2.0/plugins/error/confirm/like?iframe_referer=https%3A%2F%2Fmery.jp%2F&kid_directed_site=false&secure=true&plugin=like&return_params=%7B%22app_id%22%3A%22527961973891229%22%2C%22channel%22%3A%22https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fvy-MhgbfL4v.js%3Fversion%3D44%23cb%3Df1f0cab1c920ee8%26domain%3Dmery.jp%26origin%3Dhttps%253A%252F%252Fmery.jp%252Ff4f33a00a109fc%26relation%3Dparent.parent%22%2C%22container_width%22%3A%220%22%2C%22href%22%3A%22https%3A%2F%2Fwww.facebook.com%2FMERY.info%22%2C%22layout%22%3A%22button_count%22%2C%22locale%22%3A%22ja_JP%22%2C%22sdk%22%3A%22joey%22%2C%22ret%22%3A%22sentry%22%2C%22act%22%3A%22like%22%7D"><i class="far fa-thumbs-up"></i>いいね！ 20万</a></span>
    </div>
    <div class="footer-right">
      <?php echo $date?>
    </div>
  </div>
</div>
<script src="script.js"></script>

</body>
</html>
