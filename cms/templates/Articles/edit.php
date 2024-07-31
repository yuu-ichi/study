<?php
  $this->layout = 'default';
?>
<?php echo $this->element('hedding', ["text" => "記事の編集"]); ?>
<?php
    echo $this->Form->create($article);
    echo $this->Form->control('user_id', ['type' => 'hidden']);
    echo $this->Form->control('title');
    echo $this->Form->control('body', ['rows' => '3']);
    echo $this->Form->control('tag_string', ['type' => 'text']);
    echo $this->Form->button(__('保存する'), ['class' => 'btn btn-danger']);
    echo $this->Form->end();
?>
