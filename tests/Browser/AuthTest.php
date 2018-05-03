<?php
/**
 * Dusk authentication tests
 *
 * @since 0.1
 * @author Pim Oude Veldhuis <p.oudeveldhuis@nsosi.com>
 * @copyright 2018 North Sea Open Source Initiative (www.nsosi.com)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Hash;

/**
 * Class AuthTest
 */
class AuthTest extends DuskTestCase
{
    use DatabaseMigrations;
    
    protected function setUp()
    {
        parent::setUp();
        
        \App\Models\Account::create(['username' => 'test', 'password' => Hash::make('secret'), 'name' => 'Testaccount', 'email' => 'dev@openhelpdesk.io']);
    }
    
    public function tearDown() {
        parent::tearDown();
        
        $this->browse(function (Browser $browser) {
            $browser->driver->manage()->deleteAllCookies();
        });
    }
    
    /**
     * A browser test to check a correct login
     *
     * @return void
     */
    public function testLoginTrue()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->type('username', 'test')
                ->type('password', 'secret')
                ->press('Sign In')
                ->assertSee('Dashboard');
        });
    }
    
    /**
     * A browser test to check a incorrect login
     *
     * @return void
     */
    public function testLoginFalse()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->type('username', 'test')
                ->type('password', 'wrong')
                ->press('Sign In')
                ->assertSee('The credentials you entered are incorrect');
        });
    }
}