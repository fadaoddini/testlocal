<?php
class Controller {

    function __construct()
    {

        echo "view in controller in core";
    }


    function view($viewUrl){     // index/index.php


        require ('views/'.$viewUrl.'.php');

      //  echo "view in controller in core";


    }


}
