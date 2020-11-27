<?php
class Controller {

    function __construct()
    {

        echo "view in controller in core";
    }


    function view($viewUrl){     // index/admin.php


        require ('views/'.$viewUrl.'.php');

      //  echo "view in controller in core";


    }


}
