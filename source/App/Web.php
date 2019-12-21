<?php


namespace Source\App;
use League\Plates\Engine;
use Source\Models\Task;

class Web
{
    private $view;

    public function __construct()
    {
        $this->view = Engine::create(__DIR__."/../../theme", "php");
    }

    public function home(array $data)
    {
        $tasks = Task::get();
        echo $this->view->render("home", [
            "title" => "Home",
            "tasks" => $tasks
        ]);
    }

    public function error(array $data)
    {
        echo $data["errcode"];
    }
}