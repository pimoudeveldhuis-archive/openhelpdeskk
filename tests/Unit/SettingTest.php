<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SettingTest extends TestCase
{
    use \Illuminate\Foundation\Testing\DatabaseMigrations;
    
    /**
     * A basic test to test whether settings can be inserted
     *
     * @return void
     */
    public function testInsert()
    {
        $this->assertDatabaseMissing('settings', ['key' => 'name']);
        \App\Models\Setting::create(['key' => 'name', 'value' => 'OpenHelpdesk.io']);
        $this->assertDatabaseHas('settings', ['key' => 'name']);
    }
    
    /**
     * A basic test to test whether settings can be updated
     *
     * @return void
     */
    public function testUpdate()
    {
        \App\Models\Setting::create(['key' => 'name', 'value' => 'OpenHelpdesk.ext']);
        
        $setting = \App\Models\Setting::find('name');
        $this->assertTrue($setting !== null);
        
        $setting->fill(['value' => 'OpenHelpdesk.io'])->save();
        $this->assertTrue(\App\Models\Setting::where('key', 'name')->value('value') === 'OpenHelpdesk.io');
    }
    
    /**
     * A basic test to test whether settings can be deleted
     *
     * @return void
     */
    public function testDelete()
    {
        \App\Models\Setting::create(['key' => 'name', 'value' => 'OpenHelpdesk.io']);
        \App\Models\Setting::where('key', 'name')->delete();
        $this->assertDatabaseMissing('settings', ['key' => 'name']);
    }
}
