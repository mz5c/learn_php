<?php
require_once 'message.php';
require_once 'gbookModel.php';
require_once 'leaveModel.php';
require_once 'authorControl.php';

$message = new message();
$message->name = 'rico';
$message->email = 'rico@rico.com';
$message->content = 'hello world';
$ctrl = new authorControl();
$pen = new leaveModel();
$book = new gbookModel();
$book->setBookPath('message.txt');
$ctrl->message($pen, $book, $message);
echo $ctrl->view($book);
echo "\n";
echo $ctrl->delete($book);