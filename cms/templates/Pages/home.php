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
        <?php echo $this->Html->image('home-1.jpg', ['alt' => '1', 'class' => 'card-img-top', 'style' => 'max-height: 240px; object-fit: cover;']); ?>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <?php echo $this->Html->image('home-2.jpg', ['alt' => '2', 'class' => 'card-img-top', 'style' => 'max-height: 240px; object-fit: cover;']); ?>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <?php echo $this->Html->image('home-3.jpg', ['alt' => '3', 'class' => 'card-img-top', 'style' => 'max-height: 240px; object-fit: cover;']); ?>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <?php echo $this->Html->image('home-3.jpg', ['alt' => '3', 'class' => 'card-img-top', 'style' => 'max-height: 240px; object-fit: cover;']); ?>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>

  <div class="container px-4 py-5" id="featured-3">
    <h2 class="border-bottom">作成中</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"/></svg>
        </div>
        <h3 class="fs-2 text-body-emphasis">記事作成</h3>
        <p>記事の作成...</p>
        <a href="#" class="icon-link">
          to Articles
          <svg class="bi"><use xlink:href="#chevron-right"/></svg>
        </a>
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"/></svg>
        </div>
        <h3 class="fs-2 text-body-emphasis">タグの追加</h3>
        <p>タグの作成....</p>
        <a href="#" class="icon-link">
          to Tags
          <svg class="bi"><use xlink:href="#chevron-right"/></svg>
        </a>
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
        </div>
        <h3 class="fs-2 text-body-emphasis">作成中....</h3>
        <p>作成中...</p>
        <a href="#" class="icon-link">
          to Xxx
          <svg class="bi"><use xlink:href="#chevron-right"/></svg>
        </a>
      </div>
    </div>
  </div>

  <div>
    <canvas id="myChart"></canvas>
  </div>
</div>

<script type="module" src="/webroot/dist/bundle.js"></script>