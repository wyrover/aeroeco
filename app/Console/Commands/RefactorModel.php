<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;

class RefactorModel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zulu:refactor-model
                            {file? : (optional) Model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Replace fillable and cast variables in each model.
                            {file : Model}';

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
     * @param $files
     * @return array
     */
    protected function filesOnly($files)
    {
        do {
            $done = true;
            for ($i = 0; $i < sizeof($files); $i++) {
                if (preg_match('/^\./', $files[$i], $match)) {
                    unset($files[$i]);
                    $done = false;
                }
            }
            $files = array_values($files);
        } while (!$done);
        return $files;
    }

    /**
     * @param $x
     * @param $min
     * @param $max
     * @return bool
     */
    protected function between($x, $min, $max)
    {
        if ($x >= $min) {
            if ($x <= $max) {
                return true;
            }
        }
        return false;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        /**
         * Argument
         */
        $model = $this->argument('file');
        $tableModel = str_plural(snake_case($model));
        $this->info($tableModel);

        /**
         * Models, by default in Laravel 5.1, are located in the app folder.
         * In this project a folder called Models has been created under app.
         * This is defined in the .env file.
         *
         * MODELS=app/Models/
         */
        $pathModels = env('MODELS');
        if ($pathModels == ''){
            $pathModels = 'app/';
        }

        /**
         * php wordwrap width
         */
        $width = 120;

        // Path to database migration files
        $path = "database/migrations/";
        $files = scandir($path);
        $files = SELF::filesOnly($files);

        // Looking for a single model?
        if ($tableModel) {
            $str = '';
            foreach ($files as $file) {
                if (strpos($file, $tableModel)) {
                    $str = $file;
                }
            }
            $files = [$str];
        }

        // Fill
        if ($this->option('fill')) {
            $this->info('Fill ...');
            $models = array();
            foreach ($files as $file) {
                if (file_exists($path . $file)) {
                    // Get contents of this database migration file
                    $contents = file_get_contents($path . $file);
                    #echo $contents;
                    // Get database table name
                    if (preg_match('/Schema::.*?\{(.*?)\}\)\;/is', $contents, $match)) {
                        $str = $match[1];
                    }
                    #echo $str;
                    // Get all column names from table
                    if (preg_match_all('/table.*?\([\'](.*?)[\']/', $str, $matches)) {
                        $s = "protected \$fillable = [\n";
                        for ($i = 0; $i < sizeof($matches[1]); $i++) {
                            $s .= "\t\t'" . $matches[1][$i] . "',\n";
                        }
                        $s .= "\t];";
                        $s = preg_replace("/'id',\n\t\t/", '', $s);
                        $s = wordwrap($s, $width);
                        $this->line($s);
                    }
                    $model = preg_replace('/^.*?create_(.*?)_table.*/', "$1", $file);
                    $model = str_singular($model);
                    #$this->line($model);
                    $models[] = $model;

                    $fileName = $pathModels . ucfirst($model . '.php');
                    #echo $fileName;
                    if (file_exists($fileName)) {
                        #$this->info('file exists');
                        // Get contents of model file
                        $text = file_get_contents($fileName);
                        #$this->line($contents);
                        // Replace fillable section with new string
                        if (preg_match('/(protected \$fillable.*?;)/s', $text, $match)) {
                            $text = preg_replace('/(protected \$fillable.*?;)/s', $s, $text);
                        }
                        file_put_contents($fileName, $text);
                        #$this->line($text);
                        #$this->line($model);
                    }
                }
            }
        }

        // Cast
        if ($this->option('cast')) {
            $this->info('Cast ...');
            // Unset these data types
            $unset = array('increments', 'date', 'datetime', 'enum', 'string', 'text', 'timestamp');
            // Loop through each data migrations file
            foreach ($files as $file) {
                if (file_exists($path . $file)) {
                    // Get model name
                    $model = preg_replace('/^.*?create_(.*?)_table.*/', "$1", $file);
                    // Singular
                    $model = preg_replace('/ies$/', "y", $model);
                    $model = preg_replace('/s$/', "", $model);
                    $types = array();
                    $vars = array();
                    // Get contents of database migration file
                    $contents = file_get_contents($path . $file);
                    // Get substring containing variable type and variable name
                    if (preg_match_all("/table->(.*?)\'\)/", $contents, $match)) {
                        for ($i = 0; $i < sizeof($match[1]); $i++) {
                            $s = $match[1][$i];
                            // Get variable type and variable name
                            if (preg_match('/(.*?)\(\'(.*)/', $s, $match2)) {
                                if (!in_array($match2[1], $unset)) {
                                    $types[] = $match2[1];
                                    $vars[] = $match2[2];
                                }
                            }
                        }
                    }
                    // Build string for casting each variable name and type
                    $s = '';
                    for ($i = 0; $i < sizeof($types); $i++) {
                        $s .= "\t\t'" . $vars[$i] . "' => '" . $types[$i] . "',\n";
                    }
                    // Get model file name
                    $fileName = $pathModels . $model . ".php";
                    if (file_exists($fileName)) {
                        $text = file_get_contents($fileName);
                        // Create casting list
                        if (preg_match('/protected \$casts = \[(.*?)\];/is', $text)) {
                            if (strlen($s) > 0) {
                                $text = preg_replace('/protected \$casts = \[(.*?)\];/is', "protected \$casts = [\n$s\t];", $text);
                            }
                            file_put_contents($fileName, $text);
                            #$this->line($text);
                            #$this->line($model);
                        }
                    }
                }
            }
        }
    }
}
