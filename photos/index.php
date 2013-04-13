<html>
<!--
  DUTBS Web presence - photo gallery

  Copyright 2012 Jan Minar <rdancer@rdancer.org>
  -->
<head>
  <?php include '../common-head.php' ?>
  <title>Photo Gallery - Durham University Thai Boxing Society (DUTBS) Muay Thai</title>
  <link rel="stylesheet" href="../stylesheets/style.css" type="text/css" />
</head>
<body>
  
  <?php include '../header-footer.php' ?>

  <div class="facebookPhotos">
    <?php
	markdownEvaluate('https://www.dropbox.com/s/td33p7841q1kfpy/uploaded_photos.markdown.txt?dl=1');
     ?>
  </div class="facebookPhotos">

  <p>
    <i>Our Facebook page has <a href="<?php

      // Adapted from (accessed 2013-01-13):
      // http://www.dannyherran.com/2011/02/detect-mobile-browseruser-agent-with-php-ipad-iphone-blackberry-and-others/
      $facebookRequiresMobileURL = preg_match('/(alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine|htc|iemobile|iphone|ipaq|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|panasonic|philips|phone|playbook|sagem|sharp|sie-|silk|smartphone|sony|symbian|t-mobile|telus|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i', $_SERVER['HTTP_USER_AGENT'])
	  && !preg_match('/ipad/i', $_SERVER['HTTP_USER_AGENT']);

      if ($facebookRequiresMobileURL)
  	echo '//m.facebook.com/DurhamUniversityThaiBoxing?v=photos';
      else
  	echo '//www.facebook.com/DurhamUniversityThaiBoxing/photos_stream';
      
				?>" target="_blank">more photos&hellip;</a></i>
  </p>

  <?php include '../facebook-like-button.php' ?><br />
</body>
</html>
