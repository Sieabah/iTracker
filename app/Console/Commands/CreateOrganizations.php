<?php

namespace App\Console\Commands;

use App\Classes\Basecamp\BasecampAPI;
use App\Organization;
use Illuminate\Console\Command;

class CreateOrganizations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'basecamp:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed organizational information from API';

    protected $api = null;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(BasecampAPI $api)
    {
        $this->api = $api;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $orgs = Organization::sync($this->api->teams());

        $this->info('Synced, there are '.$orgs['organizations']->count().' organizations');
        $this->info('Deleted '.$orgs['deleted'].' organizations');

        return $orgs;
    }
}
