$(function() {
    // this code was referenced from the Jquery Draggable lecture
    // make all records draggable
    $(".record").draggable();
                
    // make the record player droppable
    $("#recordPlayer").droppable({
        // drop is an event, when the 'drop' event occurs, this anonymous function is invoked
        drop: function(event, ui) {
            // event contains data regarding the drop event
            // ui contains info about the thing that was dropped
                        
            // grabbing a reference to the dropped item
            var record = ui.draggable;
            // access the alt property of the image
            var artist = record.prop("alt");
                        
            // if the image is the stop image
            if(artist.localeCompare("Stop") == 0){
                // trigger all audio files to pause
                $(".audioDemo").trigger("pause");
                // create a message indicating the user stopped the audio files
                $("#message").html("Stop Playing");
            } 
            // if the image is not the stop image
            else {
                // create a message indicating which record was dropped
                $("#message").html("<p>Now playing: " + artist + "</p><p id='scroll'>Scroll for details...</p>");
                // make sure only one audio file is playing at a time
                $(".audioDemo").trigger("pause");
                // get the index of the image in the unordered list
                var index = $(".record").index(record) + 1;
                // then use the index to trigger the corresponding audio file to play. The image and audio file must appear in the same order for this to work
                $("#audio" + index).trigger("play");
                //display song, album, lyrics
                updateInfo(artist);
                // fade out the record
                record.fadeOut();
            }
        }
    });
});

// the following code was referenced from the AJAX Lecture
function updateInfo(description){
    
    var xmlHttp = new XMLHttpRequest();
    
    xmlHttp.onreadystatechange = function(){
        
        if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
            elemObj = document.getElementById('description');
            elemObj.innerHTML = xmlHttp.responseText;
        }
    }
    
    // GET data
    var reqURL = "Scripts/Jam6m4FinalProjectS21Music.php?description=" + description;
    xmlHttp.open("GET", reqURL, true);
    xmlHttp.send();
    
}