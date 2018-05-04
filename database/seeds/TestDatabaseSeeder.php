<?php

use Illuminate\Database\Seeder;

class TestDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $account = \App\Models\Account::create(['username' => 'test', 'password' => Hash::make('secret'), 'name' => 'Testaccount', 'email' => 'test@openhelpdesk.io', 'administrator' => false]);
        $administrator_account = \App\Models\Account::create(['username' => 'administrator', 'password' => Hash::make('secret'), 'name' => 'Administrator', 'email' => 'test@openhelpdesk.io', 'administrator' => true]);

        $department = \App\Models\Department::create(['lead_account_id' => $administrator_account->id, 'name' => 'Test Department']);

        $account->departments()->attach($department);
        $administrator_account->departments()->attach($department);
    }
}
