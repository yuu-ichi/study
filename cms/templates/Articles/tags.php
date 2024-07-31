<?php
  $this->layout = 'default';
?>

<?php echo $this->element('hedding', ["text" => "記事に関連するタグ"]); ?>
<?= $this->Text->toList(h($tags), 'or') ?>

<section>
<?php foreach ($articles as $article): ?>
    <article>
        <h4>
            <?= $this->Html->link(
                $article->title,
                ['controller' => 'Articles', 'action' => 'view', $article->id]
            ) ?>
        </h4>
        <span><?= h($article->created) ?></span>
    </article>
<?php endforeach; ?>
</section>
