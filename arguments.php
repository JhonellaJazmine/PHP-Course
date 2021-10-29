


<?php

    // //DRY

    // function myFunc() 
    // {
    //     echo "hello from function <br>";
    //     $username = "web coding";

    //     if($username == "web coding")
    //     {
    //         echo "hello, web coding";
    //     } 
    //     else {
    //         echo "you are not web coding. you shouldn't be here.";
    //     }
    // }

    // myFunc();

    function printFullName($fname, $lname)
    {

        echo "your first name is: $fname<br>
        your last name is: $lname";

    }

    printFullName("Jhonella", "Jazmine");

