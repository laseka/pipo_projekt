<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event[]|\Cake\Collection\CollectionInterface $events
 */
?>
<div class="events index content">
    <?= $this->Html->link(__('New Event'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Events') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('event_id') ?></th>
                    <th><?= $this->Paginator->sort('ticket_price') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('time') ?></th>
                    <th><?= $this->Paginator->sort('venue_id') ?></th>
                    <th><?= $this->Paginator->sort('artist') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($events as $event): ?>
                <tr>
                    <td><?= $this->Number->format($event->event_id) ?></td>
                    <td><?= $this->Number->format($event->ticket_price) ?></td>
                    <td><?= h($event->date) ?></td>
                    <td><?= h($event->time) ?></td>
                    <td><?= $event->has('venue') ? $this->Html->link($event->venue->venue_id, ['controller' => 'Venues', 'action' => 'view', $event->venue->venue_id]) : '' ?></td>
                    <td><?= h($event->artist) ?></td>
                    <td><?= h($event->description) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $event->event_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $event->event_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $event->event_id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->event_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
