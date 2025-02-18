<?php
namespace Formacom\controllers;
use Formacom\core\Controller;
use Formacom\models\Actor;
class ActorController extends Controller{
    public function index(...$params)    {
        $actors = Actor::all();
        $this->view('actor_list', $actors);
    }
    public function new(...$params)    {
        if (isset($_POST["first_name"])) {

        }
        $this->view('new_actor');
    }

    public function json(){
        $actors=Actor::where("first_name","like","P%")->get();
        $data=[
            "message"=>"List of actors starting by P",
            "list"=>$actors
        ];

        $json=json_encode($data);
        header('Content-Type: application/json');
        echo $json;
        exit;
    }
}