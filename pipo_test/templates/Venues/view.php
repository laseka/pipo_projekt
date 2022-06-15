<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venue $venue
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Venue'), ['action' => 'edit', $venue->venue_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Venue'), ['action' => 'delete', $venue->venue_id], ['confirm' => __('Are you sure you want to delete # {0}?', $venue->venue_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Venues'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Venue'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="venues view content">
            <h3><?= h($venue->venue_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Venue Name') ?></th>
                    <td><?= h($venue->venue_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($venue->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Id') ?></th>
                    <td><?= $this->Number->format($venue->venue_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
