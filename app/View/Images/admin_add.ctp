<!-- File: /app/View/Images/add.ctp -->

<?php echo $this->element('admin_nav'); ?>


<h1>Add Image</h1>
<?php
echo $this->Form->create('Image', array('enctype' => 'multipart/form-data'));
echo $this->Form->input('image_name');
echo $this->Form->input('alt_tag');
echo $this->Form->input('attribution');
echo $this->Form->input('caption', array('rows' => '3'));
echo $this->Form->file('Image.submittedfile');
echo $this->Form->end('Save Image');
?>

