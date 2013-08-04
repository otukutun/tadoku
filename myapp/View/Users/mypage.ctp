test
<?php echo $this->Html->link('ログアウト',array('controller' => 'users','action' => 'logout')); ?>
<?php echo $this->Html->link('本を登録',array('controller' => 'books','action' => 'add')); ?>

こんにちは。
<?php echo h($user['User']['username']); ?>さんの読んだ単語数は <?php echo h($user['User']['total_words']); ?>です。
