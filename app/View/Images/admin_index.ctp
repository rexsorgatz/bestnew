<!-- File: /app/View/Posts/index.ctp -->

<?php echo $this->element('admin_nav'); ?>

<h1>Images</h1>
<p><?php echo $this->Html->link('Add Image', array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>ID</th>
        <th>Image Path</th>
        <th>Image Name</th>
        <th>Dimensions</th>
        <th>Caption</th>
        <th>Alt</th>
        <th>Source</th>
        <th>Creator</th>
        <th>Created</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($images as $image): ?>
    <tr>
        <td><?php echo $image['Images']['id']; ?></td>
        <td><?php echo $image['Images']['image_path']; ?></td>
        <td><?php echo $image['Images']['image_width']; ?> X <?php echo $image['Images']['image_height']; ?></td>
        <td><?php echo $image['Images']['caption']; ?> X <?php echo $image['Images']['caption']; ?></td>
        <td><?php echo $image['Images']['alt_tag']; ?> X <?php echo $image['Images']['alt_tag']; ?></td>
        <td><?php echo $image['Images']['attribution']; ?> X <?php echo $image['Images']['attribution']; ?></td>
        <td><?php echo $image['Images']['user_id']; ?> X <?php echo $image['Images']['creator']; ?></td>
        <td>
            <?php echo $image['Images']['created']; ?>
        </td>
        <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $image['Images']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $image['Images']['id'], 'admin' => true)
                );
            ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>