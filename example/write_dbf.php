<?php
include "vendor/autoload.php";
use XBase\WritableTable;
use XBase\Record;

$newTable=WritableTable::create('test.dbf',[['test',Record::DBFFIELD_TYPE_CHAR,10]]);
for($i=0;$i<100;$i++){
	$record = $newTable->nextRecord();
	$record->test  = "asasa_$i";		
	$r=$newTable->writeRecord();	
}


var_dump($newTable);
