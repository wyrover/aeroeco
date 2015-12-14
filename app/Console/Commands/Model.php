<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Composer;

class Model extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zulu:make-model
                            {model : (required) Model name}
                            {--r : Request}
                            {--c : Controller}
                            {--m : Migration}
                            {--f : Model Faker}
                            {--s : Seeder}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make custom model
                            {model : (required) Model name}
                            {--r : Request}
                            {--c : Controller}
                            {--m : Migration}
                            {--f : Model Faker}
                            {--s : Seeder}';

    /**
     * The Composer instance.
     *
     * @var \Illuminate\Foundation\Composer
     */
    protected $composer;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Composer $composer)
    {
        parent::__construct();
        $this->composer = $composer;
        $this->composer->dumpAutoloads();
    }

    /**
     * @param $x
     * @param $min
     * @param $max
     * @return bool
     */
    protected function between($x, $min, $max){
        if ($x >= $min){
            if ($x <= $max){
                return true;
            }
        }
        return false;
    }

    /**
     * @param $s
     * @param $model
     * @return mixed
     */
    protected function replace($s, $model)
    {
        // Split string into words with uppercase characters as delimiters, i.e., AlphaBeta => [Alpha, Beta]
        $k = -1;
        $tableModel = '';
        $words = [];
        $model = ucfirst($model);
        $tableModel = snake_case($model);
        $usePath = preg_replace('~/~', '\\', ucwords(env('MODELS')));
        $s = preg_replace('/{{use_path}}/', $usePath, $s);
        $s = preg_replace('/{{model_singular}}/', str_singular($model), $s);
        $s = preg_replace('/{{table_model_plural_lowercase}}/', strtolower(str_plural($tableModel)), $s);
        $s = preg_replace('/{{model_plural_lowercase}}/', strtolower(str_plural($model)), $s);
        $s = preg_replace('/{{model_plural}}/', str_plural($model), $s);
        return $s;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // Models path defined in .env
        $model = $this->argument('model');
        $modelPath = (strlen(env('MODELS')) > 0 ? env('MODELS') : 'app/');

        $s = file_get_contents('app/Console/Commands/stubs/Model.stub');
        $s = $this->replace($s, $model);
        $output = $modelPath . str_singular($model) . '.php';
        file_put_contents($output, $s);

        // {-r} Form Request
        if ($this->option('r')) {
            $s = file_get_contents('app/Console/Commands/stubs/RequestForm.stub');
            $s = $this->replace($s, $model);
            $output = "app/Http/Requests/" . str_plural($model) . 'FormRequest.php';
            file_put_contents($output, $s);
            //$this->line($s);
        }

        // {-c} Controller
        if ($this->option('c')) {
            $s = file_get_contents('app/Console/Commands/stubs/Controller.stub');
            $s = $this->replace($s, $model);
            $output = "app/Http/Controllers/" . str_plural($model) . 'Controller.php';
            file_put_contents($output, $s);
            //$this->line($s);
        }

        // {-m} Migration
        if ($this->option('m')){
            $s = file_get_contents('app/Console/Commands/stubs/Migration.stub');
            $s = $this->replace($s, $model);
            $output = "database/migrations/" . date('Y_m_d_his') . "_create_" . strtolower(str_plural($model)) . '_table.php';
            file_put_contents($output, $s);
            //$this->line($s);
        }

        // {-f} ModelFaker
        if ($this->option('f')){
            $s = file_get_contents('app/Console/Commands/stubs/ModelFactory.stub');
            $s = $this->replace($s, $model);
            $output = 'database/factories/ModelFactory.php';
            file_put_contents($output, $s, FILE_APPEND);
            //$this->line($s);
        }

        // {-s} Seeder
        if ($this->option('s')){
            $s = file_get_contents('app/Console/Commands/stubs/Seeder.stub');
            $s = $this->replace($s, $model);
            $output = "database/seeds/" . str_plural($model) . 'TableSeeder.php';
            file_put_contents($output, $s);

            // Add seeder to DatabaseSeeder
            $this->call('zulu:refactor-database-seeder');
        }

        // Create new table
        //$this->call('migrate:refresh --seed');
    }
}
