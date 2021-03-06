<?php
//Подключаем вью
require __DIR__ . '/classes/View.php';
//Подключаем класс который работает с файлом гостевой книги
require __DIR__ . '/classes/TextFile.php';

//создаем обьект вью
$view = new View();

//создаем обьект класса который работает с гостевой книгой и говорим с какой именно ему нужно работать
$book = new TextFile(__DIR__ . '/db.php');
$book->append( "\n".'Новый текст ');
//проверяем возвращает ли то что нужно
//var_dump($book->getData());


//показываю какие именно данные нужно вывести в шаблон и отправляю туда массив который не получится вывести, так что бы не вывести нервную систему из равновесия))
$view->assign('article', $book->getData());

//отображаю шаблон
echo $view->render('guestBook.php');

