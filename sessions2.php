

<?php

    session_start();

    $_SESSION['username'] = "jaz123";
    $_SESSION['age'] = 12;

    echo "my new name is: ".$_SESSION['username'] ."<br>my age is:" .$_SESSION['age'];

    echo "<br>";

    echo "It is now set.";
?>


<html>
<head>

</head>



</html>