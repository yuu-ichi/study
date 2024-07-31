<?php
  $this->layout = 'default';
?>
<div class="row mt-4">
    <aside class="column mb-4">
        <div class="side-nav">
            <h4 class="heading"><?= __('操作') ?></h4>
            <?= $this->Html->link(__('タグ編集'), ['action' => 'edit', $tag->id], ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->postLink(__('タグ削除'), ['action' => 'delete', $tag->id], ['confirm' => __('「{0}」を削除してよろしいですか?', $tag->title), 'class' => 'btn btn-danger']) ?>
            <?= $this->Html->link(__('タグ一覧'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('タグ追加'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="tags view content">
            <h3><?= h($tag->title) ?></h3>
            <table class="table table-bordered border-dark">
                <tr>
                    <th class="table-active"><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tag->id) ?></td>
                </tr>
                <tr>
                    <th class="table-active"><?= __('タイトル') ?></th>
                    <td><?= h($tag->title) ?></td>
                </tr>
                <tr>
                    <th class="table-active"><?= __('作成日時') ?></th>
                    <td><?= h($tag->created) ?></td>
                </tr>
                <tr>
                    <th class="table-active"><?= __('更新日時') ?></th>
                    <td><?= h($tag->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('関連する記事一覧') ?></h4>
                <?php if (!empty($tag->articles)) : ?>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-primary">
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('ユーザーId') ?></th>
                                <th><?= __('タイトル') ?></th>
                                <th><?= __('スラッグ') ?></th>
                                <th><?= __('ボディ') ?></th>
                                <th><?= __('公開') ?></th>
                                <th><?= __('作成日時') ?></th>
                                <th><?= __('更新日時') ?></th>
                                <th class="actions"><?= __('操作') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tag->articles as $article) : ?>
                            <tr>
                                <td><?= h($article->id) ?></td>
                                <td><?= h($article->user_id) ?></td>
                                <td><?= h($article->title) ?></td>
                                <td><?= h($article->slug) ?></td>
                                <td><?= h($article->body) ?></td>
                                <td><?= h($article->published) ?></td>
                                <td><?= h($article->created) ?></td>
                                <td><?= h($article->modified) ?></td>
                                <td class="actions">
                                    <div class="mt-2">
                                        <?= $this->Html->link(__('表示'), ['controller' => 'Articles', 'action' => 'view', $article->id], ['class' => 'btn btn-primary']) ?>
                                    </div>
                                    <div class="mt-2">
                                        <?= $this->Html->link(__('編集'), ['controller' => 'Articles', 'action' => 'edit', $article->id], ['class' => 'btn btn-primary']) ?>
                                    </div>
                                    <div class="mt-2 mb-2">
                                        <?= $this->Form->postLink(__('削除'), ['controller' => 'Articles', 'action' => 'delete', $article->id], ['class' => 'btn btn-danger'], ['confirm' => __('本当に「{0}」削除してよろしいですか?', $article->title)]) ?>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
