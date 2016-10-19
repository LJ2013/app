<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestConsole extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hi{name=lj}{--over}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Console command test to say hi';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
        ## nonsense progress test
//        $this->output->progressStart(5);
//
//        for ($i = 0; $i < 5; $i++) {
//            sleep(1);
//            $this->output->progressAdvance();
//        }
//
//       $this->output->progressFinish();
        ####
//        echo 'sayhi '.$this->argument('name') . ($this->option('over')?' period':'');
//        $question = 'What\'s your name ?';
//        $name = $this->ask($question);
//        echo 'sayhi '.$name . ($this->option('over')?' period':'');

        $this->getFaker();
    }

    private function getFaker() {
//        $faker = \Faker\Factory::create('fr_FR'); // create a French faker
        $faker = \Faker\Factory::create('zh_CN'); // create a French faker
        dd(debug_backtrace());
        for ($i = 0; $i < 5; $i++) {
            echo mb_convert_encoding($faker->name, 'gbk'), "\n";
            echo $faker->email, "\n";
        }
    }

}
