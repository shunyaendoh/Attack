<?php
require_once('./index.php');
require_once('./Player.php');
require_once('./execute.php');

class Attack
{
    public $turn = 1,
           $count_player = 0;

    public function moveUp()
    {
        echo('<br>Hello from moveUp<br>');
        echo('現在' . $_SESSION['attack']->count_player . '人います<br>');

    }
    public function moveLeft()
    {

    }
    public function moveRight()
    {

    }
    public function moveDown()
    {
        
    }
    

}
