<?php

class Core{

    private $controller;
    private $method;
    private $params = array();


    public function __construct(){
        $this->validateUri();
    }

    public function run(){
        $actualController = $this->getController();


        $objController = new $actualController;


        call_user_func_array( array($objController, $this->getMethod()), $this->getParams() );

    }

    public function validateUri(){
        $url = explode("index.php",$_SERVER["PHP_SELF"]);
        $url = end($url);
        

        if($url != ""){
            $url = explode('/', $url);
            array_shift($url);

            ///url datas
            $this->controller = ucfirst($url[0]). "Controller";
            array_shift($url);

            if(isset($url[0])){
                $this->method = ucfirst($url[0]);
                array_shift($url);

                if(isset($url)){
                    $this->params = array_filter($url);
                }
            }

            

        }else{
            $this->controller = "IndexController.php";
        } 

    }

    public function getController(){
        return "app\\controllers\\". $this->controller;
    }

    public function getMethod(){
        return $this->method;
    }

    public function getParams(){
        return $this->params;
    }

}


?>