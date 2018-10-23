<?php
/**
 * Created by PhpStorm.
 * User: marcos
 * Date: 10/22/18
 * Time: 7:39 PM
 */

main::start("project.csv");

class main {

    static public function start($filename)
    {

        $records = csv::getRecords($filename);
        $record = recordFactory::create();
        print_r($record);

    }
}
class csv {

    static public function getRecords($filename) {

        $file = fopen("$filename", 'r');

        while (! feof($file))
        {
            $record = fgetcsv($file);
            $records[] = $records;
        }
        fclose($file);
        return ($records);
    }
}
class record{

}
class recordFactory {

    public static function create (Array $array = null) {

        $record = new record();

        return $record;
    }
}