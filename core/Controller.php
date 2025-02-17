<?php
namespace Formacom\core;
abstract class Controller
{
    abstract public function index(...$params);
    public function view($view, $data = [])
    {
        require_once './app/views/' . $view . '.php';
    }
}