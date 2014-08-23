<?php echo $this->element('admin_nav'); ?>

<h1>Edit Users</h1>
<?php
echo $this->Form->create('User');
echo $this->Form->input('email');
echo $this->Form->input('role', array(
    'options' => array('admin' => 'Admin', 'author' => 'Author')
));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Post');
?>



