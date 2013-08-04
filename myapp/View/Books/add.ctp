<?php echo $this->Form->create('Book', array(
    'inputDefaults' => array(
        'div' => 'row',
        'label' => array(
            'class' => 'col col-lg-2 control-label'
        ),
        'wrapInput' => 'col col-lg-10'
    ),
    'class' => ' form-horizontal'
)
); ?>
	<fieldset>
		<legend><?php echo __('読んだ本を追加'); ?></legend>
	<?php
echo $this->Form->input('name',array(
    //'placeholder' => '読んだ本',
    'label' => array('text' => '読んだ本')
));
echo $this->Form->input('words', array(
    //'placeholder' => 'Email'
    'label' => array('text' => '総単語数')
));
echo $this->Form->input('thoughts',array(
    'label' => array('text' => '感想')
));
echo $this->Form->hidden('user_id',array('value' => $user_id));
?>
    </fieldset>
<?php echo $this->Form->submit(__('追加'),array('div' => false, 'class' => 'btn btn-primary btn-large btn-block','style' => 'margin-top:30px;')); ?>
<?php echo $this->Form->end(); ?>
