<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;
use Symfony\Component\Console\Output\ConsoleOutput;

class CreateProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:products ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create 50 test products';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->output = new ConsoleOutput;

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $this->alert('All content will be linked with following user');
        return Command::SUCCESS;
    }
}
