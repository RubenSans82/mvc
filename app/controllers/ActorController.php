<?php
require_once './core/Controller.php';
class ActorController extends Controller
{
    public function index(...$params)
    {
        $this->view('home');
    }
    public function new(...$params)
    {
        if(isset($_POST["first_name"])) {
            
        }
        $this->view('new_actor');
    }

}
?>