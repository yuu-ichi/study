<?php
  $this->layout = 'default';
?>
<?php echo $this->element('hedding', ["text" => "記事一覧"]); ?>
<p>
    <?= $this->Html->link("記事の追加", ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
</p>
<table class="table table-hover">
    <tr class="table table-primary">
        <th scope="col">タイトル</th>
        <th scope="col">作成日時</th>
        <th scope="col">更新日時</th>
        <th scope="col">操作</th>
    </tr>

    <?php foreach ($articles as $article): ?>
    <tr class="table">
        <td>
            <?= $this->Html->link($article->title, ['action' => 'view', $article->slug]) ?>
        </td>
        <td>
            <?= $article->created->format(DATE_RFC850) ?>
        </td>
        <td>
            <?= $article->modified->format(DATE_RFC850) ?>
        </td>
        <td>
            <?= $this->Html->link('編集', ['action' => 'edit', $article->slug]) ?>
            <?= $this->Form->postLink(
                '削除',
                ['action' => 'delete', $article->slug],
                ['confirm' => 'よろしいですか?'])
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
