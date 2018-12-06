<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class updateTerminals extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'updateTerminals';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'update terminals from .csv file';

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
     * @return mixed
     */
    public function handle()
    {
//        echo 'update terminals was started';

//        echo public_path();

//        $this->importCsv();


    }

    public function importCsv()
    {
        $file = public_path('files/test.csv');

        $customerArr = $this->csvToArray($file);

        for ($i = 0; $i < count($customerArr); $i ++)
        {
            User::firstOrCreate($customerArr[$i]);
        }

        return 'Jobi done or what ever';
    }


    function csvToArray($filename = '', $delimiter = ',')
    {
        if (!file_exists($filename) || !is_readable($filename))
            return false;

        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
            {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        return $data;
    }

}
