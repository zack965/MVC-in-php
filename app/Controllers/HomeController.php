<?php

class HomeController extends Controller
{
    /*protected $user;
    public function __construct()
    {
        $this->user = $this->model("User");
    }*/
    public function index()
    {
        echo "hello from index controller";
    }
    public function test($name)
    {
        $user = $this->model("User");
        $user->name = $name;
        $this->view('Home/index', ['name' => $user->name]);
    }
    public function create()
    {
        $newUser = User::create([
            "user_first_name" => "rajaa",
            "user_last_name" => "hsn",
            "user_email" => "rajaa",
            "user_password" => "rajaa",
        ]);
        print_r($newUser);
    }
}