<?php

class App{

    public $controllers="index";
    public $method="index";

    public $params=array() ; // []

    function __construct()
    {

        if (isset($_GET['url'])){


            $url_base= $_GET['url'];   // index/index

            $url_base=$this->parsUrl($url_base);

            $url=explode('/',$url_base);  // new array url

            $this->controllers=$url[0];  // array (controller/method/parameter)
            unset($url[0]);              // array (method/parameter)

            if (isset($url[1])){

                $this->method=$url[1];
                unset($url[1]);     // array (parameter)

            }else{

                echo "method not exist";
            }



            $this->params=array_values($url);


        }


        $controllerUrl="controllers/".$this->controllers.".php";

        if (file_exists($controllerUrl)){

            require ($controllerUrl);

        }else{

            echo "<br>";
            echo "file not exist";
        }




        $object=new $this->controllers;


        if (method_exists($object,$this->method)){

            call_user_func_array([$object,$this->method],$this->params);

        }else{

            echo "<br>";
            echo "method not exist";
        }





    }



    function parsUrl($url){

        filter_var($url,FILTER_SANITIZE_URL);
        $url=rtrim($url,'/');




        return $url;  // index/index
    }




}

//$app=new App();






?>