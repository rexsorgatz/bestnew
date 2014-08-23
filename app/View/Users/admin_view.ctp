<!-- File: /app/View/Users/view.ctp -->

<?php echo $this->element('admin_nav'); ?>

<h1><?php echo h($user['User']['username']); ?></h1>

<p><small>Email: <?php echo $user['User']['email']; ?></small></p>
<p><small>Email: <?php echo $user['User']['role']; ?></small></p>
<p><small>Created: <?php echo $user['User']['created']; ?></small></p>


