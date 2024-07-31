<?php
  $this->layout = 'default';
?>
<div class="row">
    <div class="column column-80">
        <div class="tags form content">
            <?= $this->Form->create($tag) ?>
            <fieldset>
                <legend><?= __('タグの編集') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('articles._ids', ['options' => $articles]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('保存する'), ['class' => 'btn btn-danger']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
