<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * Class TicketTest
 */
class TicketTest extends TestCase
{
    use \Illuminate\Foundation\Testing\DatabaseMigrations;
    
    /**
     * A basic test creating a ticket UID
     *
     * @return void
     */
    public function testCreateUid()
    {
        $uid = \TicketHelper::createUid();
        $this->assertTrue(strlen($uid) === 7);

        $uid2 = \TicketHelper::createUid();
        $this->assertTrue(strlen($uid2) === 7);
        
        $this->assertTrue($uid !== $uid2);
    }
}
