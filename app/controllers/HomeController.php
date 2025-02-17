<?php
namespace Formacom\controllers;
use Formacom\core\Controller;
class HomeController extends Controller{
    public function index(...$params){
        $data = ['mensaje' => "Hola desde Index de HomeController"];
        $this->view('home', $data);
    }
    public function new(){
        echo "Hola desde New de HomeController";
    }
}
?>