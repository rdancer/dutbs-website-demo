<html>
<!--
  DUTBS Web presence

  Copyright 2012 Jan Minar <rdancer@rdancer.org>
  -->
<?php
  /* Allow this page to be used both in /index.php and in /about/index.php */
  global $pathPrefix;

  if (file_exists('header-footer.php'))
  {
      $pathPrefix = '';
  }
  else if (file_exists('../header-footer.php'))
  {
      $pathPrefix = '../';
  }
  else
  {
      $pathPrefix = '/';
  }
 ?>
<head>
  <?php include $pathPrefix . 'common-head.php' ?>
  <title>Durham University Thai Boxing Society (DUTBS) Muay Thai</title>
  <meta name="description" content="Student-led society that trains in the martial art of Muay Thai aka Thai Boxing. Training times, equipment, teacher & exec info." />
  <meta name="keywords" content="Muay Thai,Thai Boxing,Durham,DSU,society,training,martial art,fight,traditional,sport,Thailand,Facebook" />
  <link rel="stylesheet" href="<?php echo $pathPrefix ?>stylesheets/style.css" type="text/css" />
</head>
<body>

  <?php include $pathPrefix . 'header-footer.php' ?>

  <div class="notOnRealWebsite">
    <?php
      markdownEvaluate($pathPrefix . 'README.md');
     ?>
  </div>

  <?php include 'facebook-like-button.php' ?><br />
</body>
</html>
