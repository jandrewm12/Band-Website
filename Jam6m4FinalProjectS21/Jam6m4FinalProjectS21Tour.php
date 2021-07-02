<?php
    // this code was referenced from the User Authentication lecture
    if(!session_start()) {
		header("Location: Jam6m4FinalProjectS21Error.php");
		exit;
	}
	
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	if (!$loggedIn) {
		header("Location: Jam6m4FinalProjectS21Login.php");
		exit;
	}

?>
<!DOCTYPE html>

<!--

    Name: Jacob McIntosh
    Pawprint: jam6m4
    Challenge: Final Project S21
    Date: May 7, 2021

-->

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Jam6m4FinalProjectS21 Tour</title>
        
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
        
            <p class="head">Tour</p>
            
            <img src="Images/Tour/Jam6m4FinalProjectS21miw13.jpg" class="tourPhoto" alt="Motionless in White Tour">
            
            <p>THIS IS A PAGE CONTAINING PROTECTED CONTENT.</p>
            <p>YOU MUST BE LOGGED IN TO VIEW THIS PAGE.</p>
            
            <p><a href="Jam6m4FinalProjectS21Logout.php">Logout</a></p>
            
            <p>Upcoming tour dates: </p>
            
            <table class="tour">
            
                <tr>
                    <th>Date</th>
                    <th>Location</th>
                    <th>GET TICKETS</th>
                </tr>
                <tr>
                    <td>Friday, Oct 29</td>
                    <td>The Blue Note, Columbia MO</td>
                    <td>GET TICKETS</td>
                </tr>
                <tr>
                    <td>Saturday, Oct 30</td>
                    <td>The Granada, Lawrence KS</td>
                    <td>GET TICKETS</td>
                </tr>
            
            </table>
            
            <p>Get Tickets!</p>
            
            <form class="form" method="get" action="Jam6m4FinalProjectS21Tickets.php" target="_blank">
                <label for="firstName">First Name: </label>
                <input type="text" id="firstName" name="firstName" required>
                
                <br>
                
                <label for="lastName">Last Name: </label>
                <input type="text" id="lastName" name="lastName" required>
                
                <br>
                
                <label for="email">Email: </label>
                <input type="text" id="email" name="email" required>
                
                <br>
                
                <input type="radio" id="date1" name="date" value="oct29" checked>
                <label for="date1">Oct 29, The Blue Note, Columbia MO</label>
                
                <br>
                
                <input type="radio" id="date2" name="date" value="oct30">
                <label for="date2">Oct 30, The Granada, Lawrence KS</label>
                
                <br>
                
                <button id="submit">GET TICKETS!</button>
                
                
            </form>
            
            <br>
            <br>
            <br>
        
        </div>
        
    </body>
</html>