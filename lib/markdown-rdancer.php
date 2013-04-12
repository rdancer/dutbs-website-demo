<?php
  /*
   * DUTBS Web presence - Markdown PHP functions
   *
   * Copyright 2012, 2013 Jan Minar <rdancer@rdancer.org>
   */

  include_once "php-markdown/markdown.php";
  require_once 'htmlpurifier/library/HTMLPurifier.auto.php';
  
  /** Evaluate user-editable content */
  function markdownEvaluate($url)
  {
    $remoteFile = $url;
    $markdownSource = file_get_contents($remoteFile);
    $parsedIntoHTML = Markdown($markdownSource);
    echo htmlPurifierSanitise($parsedIntoHTML);
  }

  /**
   * Sanitise untrusted HTML input with HTML Purifier
   *
   * Based on (accessed 2013-04-10):
   * http://htmlpurifier.org/download#toclink1
   */
  function htmlPurifierSanitise($untrustedHtmlCode)
  {
    $htmlPurifier = new HTMLPurifier();
    $benignHtmlCode = $htmlPurifier->purify($untrustedHtmlCode);

    echo $benignHtmlCode;
  }
 ?>
