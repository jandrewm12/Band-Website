# Band-Website
Final project for INFOTC 2830

DOCUMENTATION

My web application is an informative and interactive website for the band Motionless in White. It has 5 main pages, each displaying different information about the band. The home page has a brief introduction and a small merchandise section like a typical band website would have. The video page has a list of the band’s YouTube videos. The music page utilizes the jQuery UI Draggable and allows the user to play a select few songs from the band’s library. The gallery page has an image carousel that shows a few images of the band. The tour page is restricted only to logged in users. In it, there is a form that can be completed to “get tickets” to a concert. The site has a consistent design language throughout and is designed to be approachable and easy to use and understand.

Requirements:

1.	HTML/CSS and 5 Required Tags: All pages of the web application have the 5 required tags and use HTML and CSS.
2.	Consistent Design: Each page of the site has the same background image, the nav bar is injected into the each webpage using JavaScript, each page has a similar layout, and the site uses the same CSS stylesheet, so colors, fonts, and other styles are consistent.
3.	Well-Structured and Logically Organized: My styles, code, and HTML is organized and well structured. For example, the headers on each page are styled using the “.head” class (CSS, lines 215-218). This allows changes to be made easily and with little effort if need be.
4.	Restricted Content, visual cue, logout button: the entire ‘Tour’ page is restricted to only those who are logged in (Jam6m4FinalProjectS21Tour.php, lines 1-14). The user knows they are logged in and are able to logout from the text on the page (Jam6m4FinalProjectS21Tour.php lines 54-57). 
5.	Username and Password: the username ‘test’ and password ‘pass’ are implemented in the Jam6m4FinalProjectS21LoginCode.php on lines 29-38.
6.	PHP: PHP is used all throughout the site. One example of PHP is the login code. This runs when the user tries to log in.
7.	Get and Post: GET is used on the Jam6m4FinalProjectS21Tour.php page, line 83. This allows the user to ‘purchase’ tickets to a show. POST is used during login so the user’s password is not leaked in the URL.
8.	Form elements outside of Login: the tour page utilizes a form that is separate from the login page. (Jam6m4FinalProjectS21Tour.php, lines 83-112).
9.	User input handling: User Input handling is dealt with on the login page. If a user enters a username/password that is incorrect, they are notified that it is incorrect and are prompted to try again. (LoginCode Lines 29-36)
10.	Multiple Photos on Page: The homepage has several photos at once in the Merch section. (index.php lines 64-67).
11.	YouTube video page: The ‘video’ page has several YouTube videos from the band’s YouTube Channel. (…Video.php, lines 36-54)
12.	JavaScript: JS is used throughout the site. One example of JS is with the image carousel on the Gallery page. It uses JS to switch between images when the user presses one of the arrow buttons on the screen. (Jam6m4FinalProjectS21Music.js)
13.	jQuery: jquery is also used throughout the site. When writing JS, I often switch back and forth between the two, using jQuery when I can make the code simpler or easier to read. There are several lines of jQuery on the (Jam6m4FinalProjectS21Music.js)) page. (lines 4, 7, 21, 23, 28, 30, 34, …).
14.	Draggable: I used the Draggable UI on the Music page. I used it so that users could click and drag album covers onto a music note and play music from the band’s library. (Jam6m4FinalProjectS21Music.js, line 4)
15.	AJAX: I used AJAX on the music page. After the user drops the record on the player, the song title, album, and lyrics are printed on the page asynchronously. (Jam6m4FinalProjectS21Music.js, lines 45-62)
16.	Quality Creation, not just a bunch of code meant to satisfy requirements: Motionless in White is my favorite band, so creating this informative page for them was very fun for me. I believe it is a useful site as well, as those who have no idea who the band is will be able to get a good idea for who they are, what kind of music they make, and more from my website. I would be very happy with showing this to an employer as I feel it showcases my abilities in web design very well.)
