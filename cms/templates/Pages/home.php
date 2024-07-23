<?php
  $this->layout = 'default';
?>
<div class="">
    <?php echo $this->element('hedding', ["text" => "Home"]); ?>
    <h1>ホームだよ</h1>
    <?php echo $this->Html->image('hero.jpg', ['alt' => 'hero', 'class' => 'img-fluid']); ?>
</div>
<div>
  <canvas id="myChart"></canvas>
</div>

<script type="module" src="/webroot/dist/bundle.js"></script>