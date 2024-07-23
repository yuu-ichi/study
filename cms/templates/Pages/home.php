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

<script type="module" src="/dist/bundle.node_modules.js"></script>
<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>