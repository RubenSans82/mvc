<?php
namespace Formacom\controllers;
use Formacom\core\Controller;
use Formacom\models\Film;
class FilmController extends Controller{
    public function index(...$params)    {
        $films = Film::all();
        $this->view('film_list', $films);
    }
    public function new(...$params)    {
        if (isset($_POST["title"])) {

        }
        $this->view('new_film');
    }

    public function json(){
        $films=Film::all();
        $data=[
            "message"=>"List of Films",
            "list"=>$films
        ];

        $json=json_encode($data);
        header('Content-Type: application/json');
        echo $json;
        exit;
    }
}