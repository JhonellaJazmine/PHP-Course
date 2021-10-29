

<?php
    
    //server
    //request
    //post - gets data from form
    //get
    //sessions
    //cookies

    // if(isset($_POST['submit']))
    // {
    //     $username = $_POST['username'];

    //     $email = $_POST['email'];

    //     echo "my username is: $username and my email is: $email";

    // }

    if(isset($_GET['lang']) AND isset($_GET['course']))
    {
        $get = $_GET['lang'];
        $course = $_GET['course'];
        echo "my favorite language is $get<br>";
        echo "this is $course";
    }


    ?>

    <html>
        <head></head>
        <body>
            <!-- <form method = "POST" action ="superglobals.php">
                username: <input type = "text" name ="username">
                <br>
                email: <input type = "text" name="email">
                <br>

                <input type ="submit" name="submit"> -->

            <a href = "superglobals_get.php?lang=php&course=webcoding">get link </a>
            <!-- the link can be another php file  -->
        </body>
    </html>