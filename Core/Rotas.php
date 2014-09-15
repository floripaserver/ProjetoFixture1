<?php

class Rotas
{
    private $url;
    private $controller;
    private $rotas = array();

    public function __construct()
    {

        $this->setRotas();

        $this->setUrl();
        $this->setController();

    }

    private function setRotas()
    {
        $config = include "Config.php";

        try{
            if(!isset($config['rotas']))
            {
                throw new \InvalidArgumentException('Configuracao de rotas invalido');
            }

            $this->rotas = $config['rotas'];

        } catch (\Exception $e)
        {
            echo $e->getMessage().'<br>';
            echo $e->getTraceAsString();
        }
    }

    private function setUrl()
    {

        $this->url = preg_split("[\\/]", $_SERVER["REQUEST_URI"], -1, PREG_SPLIT_NO_EMPTY);

    }

    private function setController()
    {
        $controller = (isset($this->url[0]) && $this->url[0] != 'index' ? $this->controller = $this->url[0] : 'home');

        foreach ($this->rotas as $page) {

            //($controller == $page ? (file_exists($this->controller.".php") ? $this->controller : http_response_code(404)) : null);
            if ($controller == $page) {
                $this->controller = $controller;
            }
        }

    }

    public function getController()
    {

        if (file_exists($this->controller . ".php")) {

            $result = $this->controller . ".php";
        } else {

            http_response_code(404);
            $result = 'erro404.php';
        }

        return $result;

    }

}