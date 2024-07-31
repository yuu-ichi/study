<?php
  $this->layout = 'default';
?>
<div class="">
    <?php echo $this->element('hedding', ["text" => "タグの一覧"]); ?>
    <p>
        <?= $this->Html->link(__('タグの追加'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
    </p>
    <div class="">
        <table class="table table-hover">
            <thead>
                <tr class="table table-primary">
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('タイトル') ?></th>
                    <th><?= $this->Paginator->sort('作成日時') ?></th>
                    <th><?= $this->Paginator->sort('更新日時') ?></th>
                    <th class="actions"><?= __('操作') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tags as $tag): ?>
                <tr class="table">
                    <td><?= $this->Number->format($tag->id) ?></td>
                    <td><?= h($tag->title) ?></td>
                    <td><?= h($tag->created) ?></td>
                    <td><?= h($tag->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('記事を表示'), ['action' => 'view', $tag->id]) ?>
                        <?= $this->Html->link(__('編集'), ['action' => 'edit', $tag->id]) ?>
                        <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $tag->id], ['confirm' => __('「{0}」を削除してよろしいですか?', $tag->title)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('最初へ')) ?>
            <?= $this->Paginator->prev('< ' . __('前へ')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('次へ') . ' >') ?>
            <?= $this->Paginator->last(__('最後へ') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('ページ {{page}}/{{pages}} 表示数:{{current}}件 合計:{{count}}件')) ?></p>
    </div>
</div>
