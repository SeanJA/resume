<?php //if ($authUser): ?>
    <ul class="admin-controls">
        <li><strong>Modify</strong></li>
        <li><?php //echo $this->Html->link(__('Edit'), array('admin' => true, 'action' => 'edit', $experience['Experience']['id'], '?' => array('back' => '/'))); ?></li>
        <li><?php //echo $this->Form->postLink(__('Delete'), array('admin' => true, 'action' => 'delete', $experience['Experience']['id'], '?' => array('back' => '/')), null, __('Are you sure you want to delete # %s?', $experience['Experience']['id'])); ?></li>
    </ul>
<?php //endif; ?>
