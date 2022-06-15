<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $event_id
 * @property int $ticket_price
 * @property \Cake\I18n\FrozenDate $date
 * @property \Cake\I18n\Time $time
 * @property int $venue_id
 * @property string $artist
 * @property string $description
 *
 * @property \App\Model\Entity\Venue $venue
 */
class Event extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'ticket_price' => true,
        'date' => true,
        'time' => true,
        'venue_id' => true,
        'artist' => true,
        'description' => true,
        'venue' => true,
    ];
}
