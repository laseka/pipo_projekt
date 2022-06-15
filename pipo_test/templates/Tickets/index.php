<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ticket[]|\Cake\Collection\CollectionInterface $tickets
 */
?>
<div class="tickets index content">
    <?= $this->Html->link(__('New Ticket'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tickets') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ticket_id') ?></th>
                    <th><?= $this->Paginator->sort('event_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tickets as $ticket): ?>
                <tr>
                    <td><?= $this->Number->format($ticket->ticket_id) ?></td>
                    <td><?= $ticket->has('event') ? $this->Html->link($ticket->event->event_id, ['controller' => 'Events', 'action' => 'view', $ticket->event->event_id]) : '' ?></td>
                    <td><?= $ticket->has('user') ? $this->Html->link($ticket->user->user_id, ['controller' => 'Users', 'action' => 'view', $ticket->user->user_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ticket->ticket_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticket->ticket_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticket->ticket_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->ticket_id)]) ?>
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
