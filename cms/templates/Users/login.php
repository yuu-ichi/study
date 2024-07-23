<?php
  $this->layout = 'default';
?>
<?= $this->Html->css(['users']) ?>

<?php echo $this->element('hedding', ["text" => "ログイン"]); ?>
<div class="users form">
    <?= $this->Flash->render() ?>
    <?= $this->Form->create() ?>
    <div class="users-fields">
      <fieldset class="users-fieldset">
          <legend><?= __('メールアドレスとパスワードを入力してください') ?></legend>
          <?= $this->Form->control('email', ['required' => true]) ?>
          <?= $this->Form->control('password', ['required' => true]) ?>
      </fieldset>
      <div class="users-action-buttons">
        <?= $this->Form->submit(__('Login'), ['class' => 'btn btn-primary users-action-login']); ?>
        <?= $this->Form->end() ?>
        <?= $this->Html->link("Add User", ['action' => 'add'], ['class' => 'btn btn-secondary users-action-add-user']) ?>
      </div>
    </div>
</div>