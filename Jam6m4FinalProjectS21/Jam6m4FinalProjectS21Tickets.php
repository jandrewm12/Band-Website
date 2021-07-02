<!DOCTYPE html>

<!--

    Name: Jacob McIntosh
    Pawprint: jam6m4
    Challenge: Final Project S21
    Date: May 7, 2021


    Image Source:
        1. https://twitter.com/MIWband/status/1332006626556080128/photo/3

-->

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Jam6m4FinalProjectS21 Tickets</title>
        <link rel="icon" href="Images/Jam6m4FinalProjectS21Fav.png">
        
        <!-- Styles -->
        <link rel="stylesheet" href="Styles/Jam6m4FinalProjectS21.css">
        
        <!-- jQuery CORE and UI -->
        
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
        
        <!-- My Scripts -->
        <script src="Scripts/Jam6m4FinalProjectS21nav.js"></script>
        
        
    </head>
    <body>
        <div class="content">
            
            <p class="head">Thank you!</p>
            
            <img src="Images/Jam6m4FinalProjectS21TicketConfirmation.jpeg" alt="Motionless in White Tour Picture" class="ticketConfirmation">
        
            <?php

                $firstName = $_GET['firstName'];
                $lastName = $_GET['lastName'];
                $email = $_GET['email'];
                $date = $_GET['date'];

                if($date == 'oct29'){
                    $concert = "October 29 @ The Blue Note, Columbia MO";
                } else {
                    $concert = "October 30 @ The Granada, Lawrence, KS";
                }
    
                print "<p class='thankYou'>Thanks, <em>$firstName $lastName</em> for getting tickets for our concert on <em>$concert</em> ! We'll email you more information later at email you provided: <em>$email</em></p>";

            ?>
            
            <p class="seeYou">See you then!</p>
            
            <br>
            <br>
            
        </div>
    </body>
</html>