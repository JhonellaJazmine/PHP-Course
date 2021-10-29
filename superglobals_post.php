

<?php
    
    //server
    //request
    //post - gets data from form
    //get
    //sessions
    //cookies

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];

        $email = $_POST['email'];

        echo "my username is: $username and my email is: $email";

    }


    ?>

    <html>
        <head></head>
        <body>
            <form method = "POST" action ="superglobals.php">
                username: <input type = "text" name ="username">
                <br>
                email: <input type = "text" name="email">
                <br>

                <input type ="submit" name="submit">



        </body>
    </html>