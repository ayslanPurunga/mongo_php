<?php

$manager=new \MongoDB\Driver\Manager("mongodb://localhost:27017");

$up=new \MongoDB\Driver\BulkWrite;

$up->update(['nome'=>'Napoleon Hill'],['$set'=>['nome'=>'Napoleon Hill Fernandes', 'idade'=>55]]);

$manager->executeBulkWrite('raiz.academicos', $up);     