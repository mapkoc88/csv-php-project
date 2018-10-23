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


    }
}
class csv {

    static public function getRecords($filename) {

        $file = fopen("$filename", 'r');

        $count = 0;

        while (! feof($file))
        {
            $record = fgetcsv($file);
            if($count==0){
                $fieldNames = $record;
            } else {
                $records[] = recordFactory::create($fieldNames, $record);

            }
            $count++;
        }
        fclose($file);
        return ($records);
    }
}
class record {

    public function __construct(Array $fieldNames = null, $values = null){


        $record = array_combine($fieldNames, $values);

        foreach ($record as $property => $value) {
            $this->createProperty($property, $value);
        }
        print_r($this);

    }
    public function createProperty($name = 'First', $value = 'Keith'){
        $this->{$name} = $value;
    }

}

class recordFactory {

    public static function create (array $fieldNames =null, Array $values = null) {

        $record = new record($fieldNames, $values);

        return $record;
    }
}