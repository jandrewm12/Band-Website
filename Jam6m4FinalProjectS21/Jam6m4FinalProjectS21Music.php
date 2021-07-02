<!DOCTYPE html>

<!--

    Name: Jacob McIntosh
    Pawprint: jam6m4
    Challenge: Final Project S21
    Date: May 7, 2021


    References: 

    Images:
        1. https://www.stickertalk.com/product/5in-x-4in-black-double-eighth-note-sticker/
        2. https://www.amazon.com/Disguise-Motionless-White/dp/B07QQ1YHD8
        3. https://www.amazon.com/Graveyard-Shift-Explicit-Motionless-White/dp/B06XD2BHCW
        4. https://en.wikipedia.org/wiki/Reincarnate_(album)
        5. https://genius.com/Motionless-in-white-creatures-x-to-the-grave-lyrics
        6. https://en.wikipedia.org/wiki/Creatures_(Motionless_in_White_album)


-->

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Jam6m4FinalProjectS21 Music</title>
        <link rel="icon" href="Images/Jam6m4FinalProjectS21Fav.png">
        
        <!-- Styles -->
        <link rel="stylesheet" href="Styles/Jam6m4FinalProjectS21.css">
        
        <!-- jQuery CORE and UI -->
        
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
        
        <!-- My Scripts -->
        <script src="Scripts/Jam6m4FinalProjectS21nav.js"></script>
        <script src="Scripts/Jam6m4FinalProjectS21Music.js"></script>
        
    </head>
    <body>
        <div class="content">
            <p class="musicHeader">Music</p>
            <!-- the following code was referenced from the UI Lecture -->
            <p class="instructions">Drag an album onto this music note to hear our music!</p>
            <div id="recordPlayer"></div>
            <h1 id="message">Now playing...</h1>
            <ul id="music">
                
                <li><img class="record" src="Images/Music/Jam6m4FinalProjectS21Disguise.jpg" alt="Another Life"></li>
                
                <li><img class="record" src="Images/Music/Jam6m4FinalProjectS21Graveyard.jpg" alt="Eternally Yours"></li>
                
                <li><img class="record" src="Images/Music/Jam6m4FinalProjectS21Reincarnate.jpg" alt="Dark Passenger"></li>
                
                <li><img class="record" src="Images/Music/Jam6m4FinalProjectS21CreaturesX.jpg" alt="Creatures X"></li>
                
                <li><img class="record" src="Images/Music/Jam6m4FinalProjectS21Creatures.jpg" alt="Creatures"></li>
                
            </ul>
            
            <audio class="audioDemo" id="audio1" controls preload="none"><source src="Audio/Jam6m4FinalProjectS21AnotherLife.mp3" type="audio/mpeg"/></audio>
            <audio class="audioDemo" id="audio2" controls preload="none"><source src="Audio/Jam6m4FinalProjectS21EternallyYours.mp3" type="audio/mpeg"/></audio>
            <audio class="audioDemo" id="audio3" controls preload="none"><source src="Audio/Jam6m4FinalProjectS21DarkPassenger.mp3" type="audio/mpeg"/></audio>
            <audio class="audioDemo" id="audio4" controls preload="none"><source src="Audio/Jam6m4FinalProjectS21CreaturesX.mp3" type="audio/mpeg"/></audio>
            <audio class="audioDemo" id="audio5" controls preload="none"><source src="Audio/Jam6m4FinalProjectS21Creatures.mp3" type="audio/mpeg"/></audio>
            <!-- lyrics HTML will be inserted here using php data-->
            
            <h1>Song Details</h1>
            <div id="description">
            
            </div>
        </div>
    </body>
</html>