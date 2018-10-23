<?php
/**
 * Created by PhpStorm.
 * User: marcos
 * Date: 10/22/18
 * Time: 7:39 PM
 */

main::start();

class main {

    static public function start(){

        $file = fopen("project.csv", 'r');

        while(! feof($file))
        {
            print_r(fgetcsv($file));
        }

        fclose($file);

    }
}