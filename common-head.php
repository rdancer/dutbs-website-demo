<?php /*
  DUTBS Web presence - common <head> contents

  Copyright 2012 Jan Minar <rdancer@rdancer.org>
  */ ?>

  <!-- Facebook Open Graph tags -->
  <meta property="og:title" content="Durham University Thai Boxing" />
  <meta property="og:type" content="sports_team" />
  <meta property="og:url" content="http://www.dutbs.co.uk/" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="Durham University Thai Boxing Society" />
  <meta property="fb:admins" content="1536759272" />

  <!-- CSS Support in Javascript -->
  <script src="/css-tricks.js"></script>

  <!-- Google Analytics -->
  <script type="text/javascript">
  
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-35268543-1']);
    _gaq.push(['_trackPageview']);
  
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  
  </script>

  <!-- jQuery (hosted on Google) -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
  </script>

  <script type="text/javascript">
    /** Open all external links in a new window/tab */
    
    $(document).ready(function() {
       $('a[href^="http:"], a[href^="https:"], a[href^="//"]').each(function(){
	  // Don't care about false negatives such as
	  // "//example.net/?q=example.com"
	  if(this.href.indexOf(location.hostname) == -1) {
	     $(this).attr({
		target: "_blank",
	     });
	  }
       })
    });
  </script>
