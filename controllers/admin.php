<?php

class Admin extends controller {

    function __construct()
    {


        // constract



    }

    function index(){


        $this->view('admin/index');
       // echo "method index in controller index";

    }


    function user($age,$mobile,$city){


        echo "age is : ".$age."<br>";
        echo "mobile is : ".$mobile."<br>";
        echo "city is : ".$city."<br>";

      //  echo "inja method user in controller index";

    }






}








?>