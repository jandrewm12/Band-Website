<!DOCTYPE html>

<!--

    Name: Jacob McIntosh
    Pawprint: jam6m4
    Challenge: Final Project S21
    Date: May 7, 2021


    Image Reference:

        1. https://twitter.com/MIWband/status/1315699265524596738/photo/1

-->

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Jam6m4FinalProjectS21 Login</title>
        
        <link rel="icon" href="Images/Jam6m4FinalProjectS21Fav.png">
        
        <!-- Styles -->
        <link rel="stylesheet" href="Styles/Jam6m4FinalProjectS21.css">
        
        <!-- jQuery CORE and UI -->
        
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
        
        <!-- My Scripts -->
        <script src="Scripts/Jam6m4FinalProjectS21nav.js"></script>
        
        <script>
        
            $(function(){
                $("input[type=submit]").button();
            });
            
        </script>
    </head>
    <body>
    
        <div class="content">
        
            <p class="head">User Login</p>
            
            <img src="Images/Jam6m4FinalProjectS21Login.jpeg" alt="Motionless in White Image" class="loginImage">
            
            <br>
            <br>
            
            <?php
            
                if($error) {
                    print "<p>$error</p>";
                }
            
            ?>
            
            <form id="login" method="post" action="Jam6m4FinalProjectS21LoginCode.php">
                
                <input type="hidden" name="action" value="do_login">
                
                <label for="username">Username: </label>
                <input type="text" id="username" name="username">
                
                <br>
                
                <label for="password">Password: </label>
                <input type="password" id="password" name="password">
                
                <br>
                
                <input type="submit" value="Submit">
                
                <br>
                <br>
            
            </form>
            
        </div>
    </body>
</html>