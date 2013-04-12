<?php /*
  DUTBS Web presence - page chrome (header and footer)

  Copyright 2012 Jan Minar <rdancer@rdancer.org>
  */ ?>
<?php
  include_once 'lib/markdown-rdancer.php';
 ?>
  <div id="header">
    <?php
      /* Display Christmas logo during Christmas 2012 */
      date_default_timezone_set('Europe/London'); // required
      if (   time() > strtotime("2012-12-25 0:01AM")
	  && time() < strtotime("2013-01-07 6:00AM")
	  ) {
              // It's Christmas time!
	      echo "<h1 id=\"logo\"><a href=\"/\"><img id=\"christmasLogo\" src=\"/images/dutbs-logo-christmas.png\" height=\"28\" style=\"width: auto; height: 28px; padding-left: 0; margin-left: 0;\" /></a></h1>";
      } else {
            echo "<h1 id=\"logo\"><a href=\"/\">D.U.T.B.S.</a></h1>";
      }
    ?>
    <ul>
      <li><a href="/about/">About</a></li>
      <li><a href="/training/">Training</a></li>
      <li><a href="/photos/">Photos</a></li>
    </ul>
  </div>
  <script>highlightCurrentTab();</script>

