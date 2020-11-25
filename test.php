<?php

// echo "inja test ast ";


Class one{



    //const website="programit.ir";

    function __construct()
    {

     //   phpinfo();

      //  define('website','programit.ir');
      //  echo "baraye hamishe ejra mishavad";


    }

     public static function  method1(){


        echo "method1 exist";

    }

    function method2(){


        echo "method2 in one";

    }


}

class two extends one {

    function m1(){
        parent::method2();

    }
}


//$test=new one;

$test=new two;
$test->m1();

// echo one::website;

//one::method1();

//echo website;






?>