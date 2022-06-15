<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->event_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->event_id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->event_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Events'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Event'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="events view content">
            <h3><?= h($event->event_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Venue') ?></th>
                    <td><?= $event->has('venue') ? $this->Html->link($event->venue->venue_id, ['controller' => 'Venues', 'action' => 'view', $event->venue->venue_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Artist') ?></th>
                    <td><?= h($event->artist) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($event->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Event Id') ?></th>
                    <td><?= $this->Number->format($event->event_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ticket Price') ?></th>
                    <td><?= $this->Number->format($event->ticket_price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($event->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Time') ?></th>
                    <td><?= h($event->time) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
