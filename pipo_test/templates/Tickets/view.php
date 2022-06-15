<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ticket $ticket
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ticket'), ['action' => 'edit', $ticket->ticket_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ticket'), ['action' => 'delete', $ticket->ticket_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->ticket_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tickets'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ticket'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tickets view content">
            <h3><?= h($ticket->ticket_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Event') ?></th>
                    <td><?= $ticket->has('event') ? $this->Html->link($ticket->event->event_id, ['controller' => 'Events', 'action' => 'view', $ticket->event->event_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $ticket->has('user') ? $this->Html->link($ticket->user->user_id, ['controller' => 'Users', 'action' => 'view', $ticket->user->user_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Ticket Id') ?></th>
                    <td><?= $this->Number->format($ticket->ticket_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
