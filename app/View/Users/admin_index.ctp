<!-- File: /app/View/Posts/index.ctp -->

<?php echo $this->element('admin_nav'); ?>

<h1>Users</h1>
<p><?php echo $this->Html->link('Add User', array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Role</th>
        <th>Created</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $user['User']['username'],
                    array('action' => 'view', $user['User']['id'])
                );
            ?>
        </td>
        <td><?php echo $user['User']['role']; ?></td>
        <td>
            <?php echo $user['User']['created']; ?>
        </td>
        <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $user['User']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $user['User']['id'], 'admin' => true)
                );
            ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>