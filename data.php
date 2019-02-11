<?php
  require_once('content.php');
  require_once('video.php');
  require_once('pickup.php');
  require_once('access.php');


  $title = "MERY";
  $search = "気になるワードを入力";
  $member = "無料会員登録";
  $login = "ログイン";
  $kiji = "記事";
  $home = "ホーム";
  $fa = "ファッション";
  $cosme = "メイク・コスメ";
  $hair = "ヘアスタイル";
  $nail = "ネイル";
  $beauty = "美容";
  $life = "ライフスタイル";
  $renai = "恋愛";
  $gurume = "グルメ";
  $travel = "旅行・おでかけ";
  $rankview = "ランキングを２０位まで見る";
  $recomend = "おすすめの記事";
  $recomendSub = "今MERYで注目の記事";
  $new = "新着の記事";
  $newSub = "最近のトレンドを知るなら、ここをチェック";
  $newI = "新着記事一覧";
  $app = "アプリで、MERYがもっと便利に。";
  $come = "電車の中でもサクサク快適。カワイイ！欲しい”がみつかる。<br />ちょっとした時間で、毎日がオシャレになるアプリ。";
  $about = "MERYについて";
  $itiran = "記事一覧";
  $keyward = "キーワード一覧";
  $form = "お問い合わせ";
  $company = "運営会社";
  $yokuaru = "よくある質問";
  $rule = "利用規約";
  $puraibasi = "プライバシーポリシー";
  $riri = "リリースの送付はこちら";
  $message = "MERY[メリー] | 女の子の毎日をかわいく。";
  $date = "2017 MERY Co., Ltd.";

  $time = date("m月d日");



  $topic1 = new Contents("./girl1.jpg", "ぱかっと開く、愛おしいフィルムに一目惚れ。がまろバッグで作るお洒落...", "この記事では、ハンドバッグ、ショルダーバッグ、リュックサックなど、色々な種類のがま口バッグごああああああああああああああああ", "ほのぽっぷ", 702);
  $topic2 = new Contents("./girl3.jpg", "冬眠から目座見た私は、春っぽヘアでお洒落に。春は垢ぬけた自分に出...", "美意識から離れた私を例えるなら冬眠状態。いつまでも寝ていないで、暖かい春に向けて新しい私に生まれああああああああああああああ", "omkchan", 5408);
  $topic3 = new Contents("./girl3.jpg", "冬眠から目座見た私は、春っぽヘアでお洒落に。春は垢ぬけた自分に出...", "美意識から離れた私を例えるなら冬眠状態。いつまでも寝ていないで、暖かい春に向けて新しい私に生まれああああああああああああああああ", "omkchan", 5408);


  $video1 = new Video("https://youtu.be/r7W0jcM6uT0", "一緒にかわいくなろう♡休みの日を彩る女の子デートプラン", "YOUTUBE", "MERYはファッション・ヘアスタイル・美容・コスメ・お出かけ・恋愛などの「好き」に出会える情報を毎日お届けしていきます。");

  $topics = array($topic1, $topic2, $topic3);
  $videos = array($video1);

  $pickup1 = new Pickup("./face.png", "お店はまるで現代アート美術館！韓国のADER errorの店舗デザインをチェック","韓国のストリートファッションの代表格とも言えるADER error(アーダーエラー)。...", "kahochi", 1912);
  $pickup2 = new Pickup("./face.png", "ついつい買っちゃうリップ。今日から「日替わりリップ」にChallengeしてみませんか？","寄り道して買ってしまったリップ。家に何色持っているのか覚えていますか？", "fightjpg", 23619);
  $pickup3 = new Pickup("./face.png", "牡蠣も石ころも、ピピッときたら即ネイル化。カワイイの幅が広がる４つの指先試案","「牡蠣」「ぼちぼち感」「石ころ」「怪しい光沢感」、４つのキーワードが鍵となる", "rosy", 14875);
  $pickup4 = new Pickup("./face.png", "お店はまるで現代アート美術館！韓国のADER errorの店舗デザインをチェック","韓国のストリートファッションの代表格とも言えるADER error(アーダーエラー)。...", "kahochi", 1912);
  $pickup5 = new Pickup("./face.png", "ついつい買っちゃうリップ。今日から「日替わりリップ」にChallengeしてみませんか？","寄り道して買ってしまったリップ。家に何色持っているのか覚えていますか？", "fightjpg", 23619);
  $pickup6 = new Pickup("./face.png", "牡蠣も石ころも、ピピッときたら即ネイル化。カワイイの幅が広がる４つの指先試案","「牡蠣」「ぼちぼち感」「石ころ」「怪しい光沢感」、４つのキーワードが鍵となる", "rosy", 14875);
  $pickup7 = new Pickup("./face.png", "お店はまるで現代アート美術館！韓国のADER errorの店舗デザインをチェック","韓国のストリートファッションの代表格とも言えるADER error(アーダーエラー)。...", "kahochi", 1912);
  $pickup8 = new Pickup("./face.png", "ついつい買っちゃうリップ。今日から「日替わりリップ」にChallengeしてみませんか？","寄り道して買ってしまったリップ。家に何色持っているのか覚えていますか？", "fightjpg", 23619);

  $pickups = array($pickup1, $pickup2, $pickup3, $pickup4, $pickup5, $pickup6, $pickup7, $pickup8);

  $access1 = new Access("./face.png", 1,"お店はまるで現代アート美術館！韓国のADER errorの店舗デザインをチェック","韓国のストリートファッションの代表格とも言えるADER error(アーダーエラー)。...", "kahochi");
  $access2 = new Access("./face.png", 2,"ついつい買っちゃうリップ。今日から「日替わりリップ」にChallengeしてみませんか？","寄り道して買ってしまったリップ。家に何色持っているのか覚えていますか？", "fightjpg");
  $access3 = new Access("./face.png", 3,"牡蠣も石ころも、ピピッときたら即ネイル化。カワイイの幅が広がる４つの指先試案","「牡蠣」「ぼちぼち感」「石ころ」「怪しい光沢感」、４つのキーワードが鍵となる", "rosy");
  $access4 = new Access("./face.png", 4,"お店はまるで現代アート美術館！韓国のADER errorの店舗デザインをチェック","韓国のストリートファッションの代表格とも言えるADER error(アーダーエラー)。...", "kahochi");
  $access5 = new Access("./face.png", 5,"ついつい買っちゃうリップ。今日から「日替わりリップ」にChallengeしてみませんか？","寄り道して買ってしまったリップ。家に何色持っているのか覚えていますか？", "fightjpg");

  $accesss = array($access1, $access2, $access3, $access4, $access5);
