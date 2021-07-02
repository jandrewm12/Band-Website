// the following code adds the navbar to the website once it is loaded in the DOM

$(function(){
    var nav = '<div id="navbar"><ul id="navbarList"><li class="navbarItem"><a href="Jam6m4FinalProjectS21Video.php" class="navbarLink">Video</a></li><li class="navbarItem"><a href="Jam6m4FinalProjectS21Music.php" class="navbarLink">Music</a></li><li class="navbarItem"><a href="index.php" class="navbarLink"><img src="Images/Jam6m4FinalProjectS21MIWLogo.png" alt="Motionless in White Logo" class="miwLogo"></a></li><li class="navbarItem"><a href="Jam6m4FinalProjectS21Gallery.php" class="navbarLink">Gallery</a></li><li class="navbarItem"><a href="Jam6m4FinalProjectS21Tour.php" class="navbarLink">Tour</a></li></ul></div>'
    $("body").prepend(nav);
});