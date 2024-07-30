<?php
  $this->layout = 'default';
?>
<div class="container">
  <?php echo $this->element('hedding', ["text" => "Home"]); ?>

  <div class="card text-bg-dark mb-4">
    <?php echo $this->Html->image('home/hero.jpg', ['alt' => 'hero', 'class' => 'card-img img-fluid']); ?>
    <div class="card-img-overlay">
      <h2 class="card-title">Dashbord</h2>
      <p class="card-text">記事の作成・タグの追加をする管理画面を学習しつつ作成しています。</p>
      <p class="card-text"><small>現在チュートリアルを進め終わって、継続で勉強も兼ねて制作中....</small></p>
      <p id="today" class="card-text"></p>
    </div>
  </div>

  <div class="mb-4">
    <h2 class="text-left fs-4 fw-bold pb-2 border-bottom">コンセプト</h2>
  </div>
  <div class="row row-cols-1 row-cols-md-2 g-4 mb-4">
    <div class="col">
      <div class="card">
        <?php echo $this->Html->image('home/coding.jpg', ['alt' => 'プログラミング', 'class' => 'card-img-top', 'style' => 'max-height: 240px; object-fit: cover;']); ?>
        <div class="card-body">
          <h5 class="card-title">プログラミング</h5>
          <p class="card-text">勉強・学習したことについて</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <?php echo $this->Html->image('home/hobby.jpg', ['alt' => '趣味', 'class' => 'card-img-top', 'style' => 'max-height: 240px; object-fit: cover;']); ?>
        <div class="card-body">
          <h5 class="card-title">ライフスタイル</h5>
          <p class="card-text">生活をしている中での気付きについて</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <?php echo $this->Html->image('home/idea-talk.jpg', ['alt' => '雑談', 'class' => 'card-img-top', 'style' => 'max-height: 240px; object-fit: cover;']); ?>
        <div class="card-body">
          <h5 class="card-title">雑談</h5>
          <p class="card-text">最近感じたことや思ったことについて</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <?php echo $this->Html->image('home/running.jpg', ['alt' => 'ランニング', 'class' => 'card-img-top', 'style' => 'max-height: 240px; object-fit: cover; object-position: 0% 80%;']); ?>
        <div class="card-body">
          <h5 class="card-title">運動</h5>
          <p class="card-text">定期的に行っている運動について</p>
        </div>
      </div>
    </div>
  </div>

  <div class="mb-4">
    <h2 class="text-left fs-4 fw-bold pb-2 border-bottom">ウェイト</h2>
  </div>
  <div class="d-flex flex-row flex-wrap justify-content-center mb-3">
    <div class="mx-auto p-8 cart-box">
      <canvas id="chart-pie"></canvas>
    </div>
    <div class="mx-auto p-8 cart-box">
      <canvas id="chart-line-graph"></canvas>
    </div>
  </div>
</div>

<script type="module" src="/webroot/dist/bundle.js"></script>