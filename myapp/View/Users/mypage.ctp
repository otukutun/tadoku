<p id="user_welcome">
<?php echo h($user['User']['username']); ?>さんの読んだ単語数は 
</p>
<?php echo $this->element('total_words',array(
    'total_words' => $user['User']['total_words'],
    'digits' => $digits
)); ?>
<!--
<div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4" id="total_words"><?php echo h($user['User']['total_words']); ?></div>
    <div class="col-lg-4"></div>
</div>-->

<?php echo $this->Html->link('本を登録',array('controller' => 'books','action' => 'add'),array('class' => 'btn btn-primary btn-large btn-block')); ?>
<!--
<ul class="nav nav-tabs nav-justified">
        <li class="active"><?php echo $this->Html->link('読んだ本',array('controller' => 'books','action' => 'index')); ?></li>
        <li><?php echo $this->Html->link('本を登録',array('controller' => 'books','action' => 'add')); ?></li>
</ul>-->
