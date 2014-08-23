<!-- File: /app/View/Posts/add.ctp -->

<?php echo $this->element('admin_nav'); ?>

<h1>Add Post</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->end('Save Post');
?>