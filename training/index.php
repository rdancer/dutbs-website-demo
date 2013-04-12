<html>
<!--
  DUTBS Web presence - training times

  Copyright 2012, 2013 Jan Minar <rdancer@rdancer.org>
  -->
<head>
  <?php include '../common-head.php' ?>
  <title>
    Training - Durham University Thai Boxing Society (DUTBS) Muay Thai
  </title>
  <link
      rel="stylesheet"
      href="../stylesheets/style.css"
      type="text/css" />
</head>
<body>

  <?php include '../header-footer.php' ?>

  <h1>Training</h1>

  <!-- Note: Markdown evaluation below is incapable of creatin a hyperlink
       with the "webcal" scheme. -->
  <div style="
	padding-top: 0.8em; /* Align with the top of the first paragraph text */
	padding-left: 4em;  /* Separate clearly from other visual elements */
	margin-right: 1%;   /* Align with the right edge of the 99%-wide iframe */
	float: right;
      ">
    <a href="webcal://www.google.com/calendar/ical/3lfmpemcp157hufvqeijlhmh7g%40group.calendar.google.com/public/basic.ics"
	class="bigOrangeButton">
      Subscribe to Calendar
    </a>
  </div>

  <?php
    markdownEvaluate(
	'https://dl.dropboxusercontent.com/s/5dqpqv0y0bywxu9/before_calendar.markdown.txt?dl=1');
   ?>
  

  <!-- The calendar loading takes quite long, and there is a risk that the user 
       would navigate away from the page before they can see anything but white 
       space.  The web browser displays a loading indicator, but the loading 
       time can be quite long, depending on latency and bandwidth.  On a fast 
       connection, the first load will take about 3 seconds.

       While loading:
       * Display a loading indicator
       * Display pale-blue border which crudely mimics the border of the 
         calendar UI
       * Keep the iframe visible, to prevent the page footer (the Facebook 
         'like' button) from jumping
    -->
  <script>
    /** Hide the loading indicator, clean up UI */
    function iframeFinishedLoading()
    {
      document.getElementById("loadingIndicator").style.display = "none";
      document.getElementById("embeddedCalendar").style.border = "none";
    }
  </script>
  <div
      id="loadingIndicator"
      style="border: solid 8px #e5ecf9; border-bottom: none; width: 99%;">
    <i>Loading calendar&hellip;</i>
  </div id="loadingIndicator">


  <iframe
      src="https://www.google.com/calendar/embed?mode=AGENDA&amp;showTitle=0&amp;showCalendars=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=3lfmpemcp157hufvqeijlhmh7g%40group.calendar.google.com&amp;color=%23333333&amp;src=5lsbuq767p6s95fbe2otl0ihm600imsk%40import.calendar.google.com&amp;color=%231B887A&amp;ctz=Europe%2FLondon"
      style="border: solid 8px #e5ecf9; border-top: none;"
      width="99%"
      height="90%"
      frameborder="0"
      scrolling="no"
      onload="iframeFinishedLoading()"
      id="embeddedCalendar"></iframe>

<?php include '../facebook-like-button.php' ?><br />
</body>
</html>
