<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class BackupDataBase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'iseed:AllTables';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     *
     * @return int
     */
    public function handle()
    {
        $tables = [
            'data_types', // +
            'data_rows', // +
            'menus', // +
            'menu_items', // +
            'roles', // +
            'permissions', // +
            'permission_role', // +
            'settings', // +
            'users',
            'user_roles',
            'translations',
            'contacts',
            'home_pages'
        ];

        $bar = $this->output->createProgressBar(count($tables));

        $bar->start();

        foreach ($tables as $table) {
            Artisan::call("iseed $table --classnameprefix=FromArtisan");
            $bar->advance();
        }
        $this->line("");
        $bar->finish();

        return 0;
    }
}
