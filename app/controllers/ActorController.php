<?php
require_once './core/Controller.php';
class ActorController extends Controller{
    public function index(...$params){
        echo "Hola desde Index de ActorController";
    }
    public function new(){
        echo "Hola desde New de ActorController";
    }

}
?>