<?php
require_once('./index.php');
require_once('./Attack.php');
require_once('./execute.php');

class Player 
{
    public $x,
           $y,
           $name;

    public function __construct($x, $y, $name)
    {
        $this->x = $x;
        $this->y = $y;
        $this->name = $name;
        $_SESSION['attack']->count_player++;
        $this->sayCoordinate();
        $this->sayPlayers();
    }
    public function sayCoordinate()
    {
        echo($this->name . ':' . $this->x . '/' . $this->y . '<br>');
    }
    public function sayPlayers()
    {
        echo('現在' . $_SESSION['attack']->count_player . '人います<br>');
    }
}
