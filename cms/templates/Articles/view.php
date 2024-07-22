<?php
  $this->layout = 'default';
?>
<h1><?= h($article->title) ?></h1>
<p><?= h($article->body) ?></p>
<p>
    <small>作成日時: <?= $article->created->format(DATE_RFC850) ?></small>
</p>
<p>
    <b>Tags:</b> <?= h($article->tag_string) ?>
</p>
<p><?= $this->Html->link('Edit', ['action' => 'edit', $article->slug]) ?></p>
