<?php
require __DIR__ . '/classes/View.php';
require __DIR__ . '/classes/TextFile.php';

$view = new View();

$book = new TextFile(__DIR__ . '/db.php');
$test = $book->getData();
var_dump($test);


foreach ($test as $line)
    {
       echo $line."<br>";
    }


$view->assign('article', $line);
echo $view->render('guestBook.php');