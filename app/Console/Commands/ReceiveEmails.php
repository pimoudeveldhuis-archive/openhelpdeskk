<?php
/**
 * A Command used by the scheduler to receive new emails from the configured servers.
 * Will subsequently assign all new and orphaned emails to an existing or new ticket.
 *
 * @since 0.1
 * @author Chris van Zanten <c.vanzanten@nsosi.com>
 * @copyright 2018 North Sea Open Source Initiative (www.nsosi.com)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */

namespace App\Console\Commands;

use App\Classes\EmailFunctions;
use Illuminate\Console\Command;

class ReceiveEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:receive';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Receives email from all configured servers and assigns them to a ticket.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        EmailFunctions::obtainEmailsFromServers();
        EmailFunctions::assignEmailsToTickets();
    }
}
