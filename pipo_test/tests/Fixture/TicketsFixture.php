<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TicketsFixture
 */
class TicketsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'ticket_id' => 1,
                'event_id' => 1,
                'user_id' => 1,
            ],
        ];
        parent::init();
    }
}
