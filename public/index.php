<?php
/**
 * Created by PhpStorm.
 * User: emmanuel
 * Date: 10/3/18
 * Time: 7:46 PM
 */

main::start();

class main
{

    static public function start()
    {
$records = csv::getRecords();
$table = html::generateTable($records);
system::printPage($table);

}

}

class csv
{

    static public function getRecords()
    {

        $records = 'test1234444';
        return $records;
    }

}


class html {

    static public function generateTable($records) {
        $table = $records;

        return $table;
    }
}

class system {}