<?php
class App
{
    protected $controller = "Home";
    protected $method = "index";
    protected $params = [];
    public function __construct()
    {
        echo 'App';
        //print_r($this->ParseUrl());
        $url = $this->ParseUrl();
        print_r($url);
        echo "<br/>";
        print($url[0]);
        echo "<br/>";
        //Controllers
        if (file_exists('../app/Controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }
        include_once '../app/Controllers/' . $this->controller . '.php';
        echo "<br/>";
        echo $this->controller;
        $this->controller = new $this->controller;
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
                echo "<br/>";
                echo "ok";
                echo "<br/>";
            }
        }
        //include_once '../Controllers/Home.php';
        $this->params = $url ? array_values($url) : [];
        print_r($this->params);
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
    public function ParseUrl()
    {
        if (isset($_GET['url'])) {
            //echo $_GET['url'];
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}