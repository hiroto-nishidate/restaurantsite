@extends('layout')

@section('content')

<meta charset="UTF-8">
<title>restaurant</title>
<!-- SEO対策 -->
<meta name="description" content="お気に入りの洋食店を共有し、一押しのお店を発見できます！">
<!-- レイアウト制御 -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



<!-- スタイルシートはここから -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:500" rel="stylesheet">
</head>

<body>

<!-- トップ画像 -->
<div class="jumbotron-fluid position-relative top-image p-0">


  <!-- トップ画像内文字 -->
  <div class="text-white position-absolute main-txt">
    <h1 class="display-4">Welcome to my Site!</h1>
  </div>
</div>

<!-- 上部部分 -->
<div class="zigzag text-white">
  <div class="container py-5">
    <div class="row py-5">
      <div class="col-lg-6">
        <h2 class="party-title mx-auto h3">お気に入りの洋食店を共有し、一押しのお店を発見できます！</h2>

        <div class="d-flex flex-row mb-3">
          <image src="image/first-image-1.jpg" alt="" class="h-100 col-6 p-0 mr-lg-3">
          <image src="image/first-image-2.jpg" alt="" class="h-100 col-6 p-0">
        </div>
      </div>
      <div class="col-lg-6">
        <image src="image/first-image-3.jpg" alt="" class="w-100 mb-3">
      </div>
    </div>
  </div>
</div>


<!-- おすすめ洋食店 -->
<div class="py-5">
  <div class="container">
    <h2 class="text-center display-3 py-2">おすすめ洋食店</h2>
    <p class="mx-auto w-75">
      東京近郊の人気洋食店をご紹介します。
    </p>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4 border border-0">
          <image src="image/second-image-1.jpg" alt="" class="border card-img-top">
          <div class="card-body">
            <h3 class="card-title">旬香亭（しゅんこうてい）目白</h3>
            <p class="card-text mb-lg-4">目白駅すぐに店を構える洋食店です。王道の昔懐かしいメニューが自慢のお店で店内も開放感があり気持ちよく食事することができます。</p>
            <div class="text-center">
              <a class="btn btn-outline-secondary d-block d-md-inline-block mb-2 mb-md-0" href="sample/index.html" role="button">メニューをみる</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 border border-0">
          <img src="image/second-image-2.jpg" alt="" class="border card-img-top">
          <div class="card-body">
            <h3 class="card-title">レストランはやしや　新宿</h3>
            <p class="card-text mb-lg-4">昭和２４年に創業され、テレビ番組でも取り上げれたオムライスが人気です。昭和の雰囲気が漂うお店です。
知る人ぞ知る老舗洋食屋です。</p>
            <div class="text-center">
              <a class="btn btn-outline-secondary d-block d-md-inline-block mb-2 mb-md-0" href="sample/index.html" role="button">メニューをみる</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 border border-0">
          <img src="image/second-image-3.jpg" alt="" class="border card-img-top">
          <div class="card-body">
            <h3 class="card-title">生パスタの店エッコエッコ　上野</h3>
            <p class="card-text mb-lg-4">リーズブナルな値段で生パスタを楽しむことができます。セットメニューも豊富でドリンバイキングが付いているメニューもあります。</p>
            <div class="text-center">
              <a class="btn btn-outline-secondary d-block d-md-inline-block mb-2 mb-md-0" href="sample/index.html" role="button">メニューをみる</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 border border-0">
          <img src="image/second-image-4.jpg" alt="" class="border card-img-top">
          <div class="card-body">
            <h3 class="card-title">ミトヤ 　池袋</h3>
            <p class="card-text mb-lg-4">価格が安くかつボリュームが多く、お腹いっぱいに食べることができます。チキンカレーがおすすめです。</p>
            <div class="text-center">
              <a class="btn btn-outline-secondary d-block d-md-inline-block mb-2 mb-md-0" href="sample/index.html" role="button">メニューをみる</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 border border-0">
          <img src="image/second-image-5.jpg" alt="" class="border card-img-top">
          <div class="card-body">
            <h3 class="card-title">洋食ボンバー　豪徳寺</h3>
            <p class="card-text mb-lg-4">少ない席数ながら、スッキリとした清潔感のある店内で,一人でも気軽に入れます。味とコスパ高評価な洋食店です。</p>
            <div class="text-center">
              <a class="btn btn-outline-secondary d-block d-md-inline-block mb-2 mb-md-0" href="sample/index.html" role="button">メニューをみる</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 border border-0">
          <img src="image/second-image-6.jpg" alt="" class="border card-img-top">
          <div class="card-body">
            <h3 class="card-title">グリルエフ　五反田</h3>
            <p class="card-text mb-lg-4">五反田で半世紀以上続く老舗レストランでハヤシライスがいちばん人気です。少しホロ苦さがある、コクのある味わいです。</p>
            <div class="text-center">
              <a class="btn btn-outline-secondary d-block d-md-inline-block mb-2 mb-md-0" href="sample/index.html" role="button">メニューをみる</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 洋食店豆知識 -->
<div class="zigzag py-5">
  <div class="container">

    <h2 class="text-center display-3 pb-3 text-white">洋食店豆知識</h2>
    <p class="mx-auto mb-5 col-md-10 text-white">
      洋食店は１８６３年,今から約150年前に長崎に開いた「良林亭」が始まりとされております。元々は外国人向けでしたが、人気店となり
明治を代表する著名人も訪れるようになりました。

    </p>
  </div>
  <div class="container-fluid">
    <div class="row py-5">
      <div class="col-12 col-lg-5 order-md-2 p-lg-0 mb-3">
        <img src="image/gallery-image-1.jpg" alt="" class="w-100">
      </div>
      <div class="col-12 col-lg-5 order-md-1 ml-md-auto">
        <h3 class="mb-3 h2 text-white">お子様ランチ</h3>
        <p class="text-white">
          子供の頃一度は食べたことがある、お子様ランチは大正１１年日本橋三越の百貨店食堂にて誕生しました。
当時は御子様洋食と呼ばれており、値段は30銭(約1000円)で提供されていました。
        </p>
      </div>
    </div>

    <div class="row py-5">
      <div class="col-12 col-lg-5 order-1 p-lg-0 mb-3">
        <img src="image/gallery-image-2.jpg" alt="" class="w-100">
      </div>
      <div class="col-12 col-lg-5 order-2 mr-md-auto">
        <h3 class="mb-3 h2 text-white">ナポリタン</h3>
        <p class="text-white">
          明治から戦前の昭和まで洋食は高級料理と知られ、庶民に手が届くものではありませんでした。
ところが戦後、GHQによりアメリカ文化が押し寄せることにより、ケチャップが手軽に手に入るようになり、
ナポリタンが流行しました。
        </p>
      </div>
    </div>

    <div class="row py-5">
      <div class="col-12 col-lg-5 order-md-2 p-lg-0 mb-3">
        <img src="image/gallery-image-3.jpg" alt="" class="w-100">
      </div>
      <div class="col-12 col-lg-5 order-md-1 ml-md-auto">
        <h3 class="mb-3 h2 text-white">牛鍋</h3>
        <p class="text-white">
          昔の日本は仏教の影響により牛肉を食べることが禁止されておりましたが、明治維新をきっかけに肉食が解禁され日本人の味覚に合うよう、醤油や砂糖で味付けした牛鍋が生まれました。
        </p>
      </div>
    </div>

  </div>
</div>


<!-- 下部コンテンツ -->
<div class="light-zigzag zigzag-none mb-0">
  <div class="container-fulid py-5">
    <div class="container">
      <div class="row">
        <!-- ニュース -->
        <div class="col-12 col-lg-7">
          <div class="container">
            <h2 class="display-4 text-center pb-3">人気洋食ランキング</h2>
            <div class="d-lg-flex flex-row mb-3">
              <img src="image/ranking-image-1.jpg" alt="" class="h-100 col-lg-6 p-0 mb-3 mb-lg-0">
              <div class="col-lg-6">
                <h3>カレーライス(第1位)</h3>
                <p>
                  日本人の国民食とも呼ばれるカレーは、江戸末期に日本に伝わり、明治初頭から広まりました。
昭和になると固形ルウが開発され、家庭で簡単にカレーが作れるようになりました。
                </p>
              </div>
            </div>
            <div class="d-lg-flex flex-row mb-3">
              <img src="image/ranking-image-2.jpg" alt="" class="h-100 col-lg-6 p-0 mb-3 mb-lg-0">
              <div class="col-lg-6">
                <h3>ハンバーグ(第2位)</h3>
                <p>
                  1960年代の高度成長期に価格の安い合い挽き肉で作るボリューム満点のハンバーグは、財布に優しい家庭料理として一気に広まりました。
                </p>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
  
 
@endsection