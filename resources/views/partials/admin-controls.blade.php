@if(Auth::user())
    <ul class="admin-controls">
        <li><strong>Modify</strong></li>
        <li>
            <a href="{{route('admin::resume::edit', ['id' => $experience->id])}}">
                Edit
            </a>
        </li>
        <li>
            <?php //echo $this->Form->postLink(__('Delete'), array('admin' => true, 'action' => 'delete', $experience['Experience']['id'], '?' => array('back' => '/')), null, __('Are you sure you want to delete # %s?', $experience['Experience']['id'])); ?>
        </li>
    </ul>
@endif
