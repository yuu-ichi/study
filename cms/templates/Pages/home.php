<?php
  $this->layout = 'default';
?>
<div class="container">
  <?php echo $this->element('hedding', ["text" => "Home"]); ?>

  <div class="card text-bg-dark mb-4">
    <?php echo $this->Html->image('hero.jpg', ['alt' => 'hero', 'class' => 'card-img img-fluid']); ?>
    <div class="card-img-overlay">
      <h5 class="card-title">Dashbord</h5>
      <p class="card-text">記事の作成・タグの追加をする管理画面を学習しつつ作成しています。</p>
      <p class="card-text"><small>現在チュートリアルを進め終わって、継続で勉強も兼ねて制作中....</small></p>
    </div>
  </div>

  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
        <?php echo $this->Html->image('home/coding.jpg', ['alt' => 'プログラミング', 'class' => 'card-img-top', 'style' => 'max-height: 240px; object-fit: cover;']); ?>
        <div class="card-body">
          <h5 class="card-title">プログラミング</h5>
          <p class="card-text">TODO</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <?php echo $this->Html->image('home/hobby.jpg', ['alt' => '趣味', 'class' => 'card-img-top', 'style' => 'max-height: 240px; object-fit: cover;']); ?>
        <div class="card-body">
          <h5 class="card-title">趣味</h5>
          <p class="card-text">TODO</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <?php echo $this->Html->image('home/idea-talk.jpg', ['alt' => '雑談', 'class' => 'card-img-top', 'style' => 'max-height: 240px; object-fit: cover;']); ?>
        <div class="card-body">
          <h5 class="card-title">雑談</h5>
          <p class="card-text">TODO</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <?php echo $this->Html->image('home/running.jpg', ['alt' => 'ランニング', 'class' => 'card-img-top', 'style' => 'max-height: 240px; object-fit: cover; object-position: 0% 80%;']); ?>
        <div class="card-body">
          <h5 class="card-title">運動</h5>
          <p class="card-text">TODO</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>

  <div>
    <canvas id="myChart"></canvas>
  </div>
</div>

<script type="module" src="/webroot/dist/bundle.js"></script>