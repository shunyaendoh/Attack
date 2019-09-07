<?php
require_once('./index.php');
require_once('./Player.php');
require_once('./Attack.php');
session_start();

// ゲームを管理する
// Attackクラスのインスタンスを作成
$_SESSION['attack'] = new Attack();

// プレイヤーを管理する
// Playerクラスのインスタンスを作成
if (isset($_POST['x1']) && isset($_POST['y1']))
{
    $_SESSION['p1'] = new Player((int)$_POST['x1'], (int)$_POST['y1'], 'player1');
}
if (isset($_POST['x2']) && isset($_POST['y2']))
{
    $_SESSION['p2'] = new Player((int)$_POST['x2'], (int)$_POST['y2'], 'player2');
}

echo('<br>');

// セッションを解放するボタンの処理
if (isset($_POST['unset']))
{
    echo('hi from unset<br>');
    session_destroy();
    $_SESSION['attack'] = new Attack();
    header('Location: index.php');
}

// ----------------問題箇所-----------------
// 移動ボタンを押された時の処理
if (isset($_POST['up']))
{
    $_SESSION['attack']->moveUp();
}

if (isset($_POST['left']))
{
    echo('hi from left<br>');
}

var_dump($_SESSION);
echo('<br>');
var_dump($_SESSION['p1']);
echo('<br>');
var_dump($_SESSION['p2']);