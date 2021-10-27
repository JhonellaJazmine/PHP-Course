

<?php

    //there are 3 types of arrays
    //indexed, associative, multi-dimmentional


    // $users = array("jane", "nella", "jaz", "bebe");
    

    // //THIS IS AN INDEX ARRAY
    // $users = ["jane","nella","jaz","bebe"];
    
    // echo $users [0];

    // echo "<br>";
    // echo count ($users);

    // //THIS IS AN ASSOCIATIVE ARRAY
    // $age = ['nella'=>21,'jaz'=>12, 'bebe'=>23];

    // //echo $age['nella'];

    // foreach ($age as $key => $value)
    // {
    //     echo "name is: ". $key . ". age is ".$value;

    //     echo "<br>";
    // }


    //THIS IS A MULTI DIMMNETIONAL ARRAY

    $multi = array(

        array('php','java','javascript'),
        array('laravel','symfony','nodejs'),
        array('mysql','mongodb','couchdb')

    );

    echo $multi[2][2];


