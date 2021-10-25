<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Output\ConsoleOutput;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:command ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'test command';

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

        $this->alert('ale jestes super ');
        return Command::SUCCESS;
    }
}
